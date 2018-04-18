<?php
    require_once 'ini.php';

    $smarty->caching = false;

    define('STATUS_FREE', 0);
    define('STATUS_GUO', 1);
    define('STATUS_WEI', 2);
    define('STATUS_DAI' , 3);
    // 根据cmd 调用方法
    $cmd = !empty($_REQUEST['cmd'])?$_REQUEST['cmd']:'yuyue';
    $func = 'handle_' . $cmd . '_cmd';
    call_user_func($func);
    // 1.预约
    function handle_yuyue_cmd(){
        global $smarty;
        //echo '<pre>';
        // 获得所有的房间
        $rooms = get_rooms_all();
        $smarty->assign('rooms', $rooms);

        // 偏移量,如果没有，则为当前时间
        $time = empty($_GET['offset']) ? time() : $_GET['offset'];
        // 取得当前日期所在周的所有日期
        $weekdays = get_week_days($time);
        $smarty->assign('weekdays', $weekdays);

        //当前时间所在周次的起止时间
        $week_period = get_week_period($time);
        $smarty->assign('week_period',$week_period);

        /* get arrangements */
        $starttime = $week_period['start'];
        $endtime = $week_period['end'];
        $arrangements = get_arrangements($starttime,$endtime);
        $arrangements_class = get_arrangements_class($arrangements);
        $smarty->assign('arrangements_class',$arrangements_class);
        //print_r($arrangements_class);die;

        $arrangements_arr = array();
        foreach( $arrangements as $r){
            if($r['published'] == STATUS_GUO || $r['published'] == STATUS_DAI) {
                $arrangements_arr[$r['dt']][$r['room_id']][$r['datesector_id']][]  = $r;
            }
        }
        $smarty->assign('arrangements', $arrangements_arr);
        //print_r($arrangements1);die;

        /* get datesectors */
        $datesectors = get_datesectors();
        $smarty->assign('datesectors', $datesectors);
        //print_r($datesectors);die;

        $smarty->display('yuyue/yuyue.html');
    }

    //获取场所信息
    function get_rooms_all(){
        global $db;
        $rs = $db->fetchAll('tblroom_rooms',['order'=>'sort_order asc']);
        return $rs;
    }

    //获取时段信息
    function get_datesectors(){
        global $db;
        $datesectors = array();
        $data = $db->fetchAll('tblroom_datesector',['fields'=>'id,sd_start,sd_end','order'=>'sd_start asc']);
        foreach ($data as $val){
            $datesectors[$val['id']] = $val['sd_start'].' - '.$val['sd_end'];
        }
        return $datesectors;
    }

    //取得当前日期所在周的所有日期
    function get_week_days($date){
        // 取得一个日期的 Unix 时间戳
        $time = mktime(00,00,00,date('m',$date),date('d',$date),date('Y',$date));
        $week_period = get_week_period($time);
        $week_start = $week_period['start'];
        $week_end = $week_period['end'];
        //周次内所有日期
        $weeks = array();
        for($i = $week_start ; $i<=$week_end; $i+=86400){
            $weeks[] = $i;
        }
        return $weeks;
    }

    //根据传入的时间生成所在周的 起止日期的时间戳一维数组
    function get_week_period($time){
        $time = mktime(0,0,0,date('m',$time),date('d',$time), date('Y',$time));
        $curr_wday = date('w',$time); // 0-6 周日-周六
        $period = array();
        if($curr_wday == 0) {
            $week_start = strtotime("-6 day", $time);
            $week_end =  $time;
        } else {
            $sno = $curr_wday - 1;
            $week_start = strtotime("-{$sno} day", $time);
            $sno = 7 - $curr_wday;
            $week_end = strtotime("+{$sno} day", $time);
        }
        $period = array('start' => $week_start,'end' => $week_end);
        return $period;
    }

    // 时间段内场地的预约信息，包含待审核及已审核的 。如果参数为0，则查找全部场地信息
    function get_arrangements($starttime='',$endtime = '',$room_id = 0,$datesector_id = '',$published = '', $uid = ''){
        global 	$db;

        $sql = 'select  a.*, b.title as room, b.contact as room_address, c.title as datesector 
                from tblroom_arrangement a, tblroom_rooms b, tblroom_datesector c
                where a.room_id=b.id  and a.datesector_id=c.id';
        $where = '';
        if($starttime){
            $where .= isset($where) ? ' and ' : '';
            $where .= ' a.dt>=' . $starttime ;
        }
        if($endtime) {
            $where .= isset($where) ? ' and ' : '';
            $where .= ' a.dt<=' . $endtime ;
        }

        if($room_id){
            $where .= isset($where) ? ' and ' : '';
            $where .= ' a.room_id='.$room_id;
        }
        if($datesector_id){
            $where .= isset($where) ? ' and ' : '';
            $where .= ' a.datesector_id='. $datesector_id;
        }
        if($published){
            $where .= isset($where) ? ' and ' : '';
            if($published == STATUS_CREDIT){
                $where .= ' a.published ='. STATUS_GUO .' and credit !=\'\'';
            } else {
                $where .= ' a.published = '. $published;
            }
        }
        if ( $uid ) {
            $where .= isset($where) ? ' and ' : '';
            $where .= ' a.uid = '. $db->quote($uid);
        }

        $sql .= $where;

        $sql .= ' order by a.dt';
        $arrangements = $db->query($sql);

        return $arrangements;
    }

    function get_arrangements_class($result){
        $arrangements_class = array();
        foreach ( $result as $r){
            if( $r['published'] == 1 && !empty( $r['credit']) ) {
                $status = 4;
            } else {
                $status = $r['published'];
            }
            $arrangements_class[$r['dt']][$r['room_id']][$r['datesector_id']]  = $status;

        }
        return $arrangements_class;
    }

    // 样式
    function get_arrange_class_name($status){
        switch( $status ){
            // 通过
            case 1:
                $bgcolor = 'bgcolor = "#89D6FF"';
                break;
            // 待审核
            case 3:
                $bgcolor = 'bgcolor = "#FEE58F"';
                break;
            // 未预约 未通过
            case 0:
            case 2:
            default:
                $bgcolor = 'bgcolor = "#F5F5F5"';
                break;
        }
        return $bgcolor;
    }

    // 转换为中文星期
    function trans_week($num){
        switch ($num){
            case 0:$week = '日';break;
            case 1:$week = '一';break;
            case 2:$week = '二';break;
            case 3:$week = '三';break;
            case 4:$week = '四';break;
            case 5:$week = '五';break;
            case 6:$week = '六';break;
        }
        return $week;
    }

    // 预约表单
    function handle_apply_cmd(){
        global $db,$smarty;
        if (!empty($_POST['postflag'])){
            unset($_POST['cmd']);
            unset($_POST['postflag']);
            $_POST['published'] = 3;
            $res = $db->insert('tblroom_arrangement',$_POST);
            if ($res){
                reload_js('提交申请成功！','yuyue.php?cmd=liebiao');
            }else{
                reload_js('提交申请失败！','yuyue.php');
            }
        }else{
            $dt = $_GET['dt'];
            $room_id = $_GET['room_id'];
            $datesector_id = $_GET['datesector_id'];
            $res = $db->fetchOne('tblroom_arrangement',['where'=>'dt='.$dt.' and room_id='.$room_id.' and datesector_id='.$datesector_id]);
            if ($res['published'] == 1 || $res['published'] == 3){
                reload_js('当前房间不可预约！');
            }else{
                $datesector = $db->fetchOne('tblroom_datesector',['fields'=>'sd_start,sd_end','where'=>'id='.$datesector_id]);
                $smarty->assign('datesector',$datesector);

                $room = $db->fetchOne('tblroom_rooms',['fields'=>'title','where'=>'id='.$room_id]);
                $smarty->assign('room',$room);

                $smarty->assign('dt',$dt);
                $smarty->assign('room_id',$room_id);
                $smarty->assign('datesector_id',$datesector_id);

                $smarty->display('yuyue/yuyue_apply.html');
            }
        }
    }

    // 2.时间段
    function handle_shijianduan_cmd(){
        global $smarty,$db;
        $time = $db->fetchAll('tblroom_datesector');
        $smarty->assign('time',$time);
        $smarty->display('yuyue/yuyue_shijianduan.html');
    }

    function handle_shijianduan_del_cmd(){
        global $db;
        $res = $db->delete('tblroom_datesector','id='.$_GET['id']);
        if ($res){
            reload_js('删除成功！','yuyue.php?cmd=shijianduan');
        }else{
            reload_js('删除失败！','yuyue.php?cmd=shijianduan');
        }
    }

    // 3.场所
    function handle_changsuo_cmd(){
        global $smarty,$db;
        $room = $db->fetchAll('tblroom_rooms');
        $smarty->assign('room',$room);
        $smarty->display('yuyue/yuyue_changsuo.html');
    }

    function handle_changsuo_del_cmd(){
        global $db;
        $res = $db->delete('tblroom_rooms','id='.$_GET['id']);
        if ($res){
            reload_js('删除成功！','yuyue.php?cmd=changsuo');
        }else{
            reload_js('删除失败！','yuyue.php?cmd=changsuo');
        }
    }

    // 4.列表
    function handle_liebiao_cmd(){
        global $db,$smarty;
        $sql = 'select a.*,b.title AS rooms,c.title AS datesector,c.sd_start,c.sd_end  from tblroom_arrangement AS a 
                LEFT JOIN tblroom_rooms AS b ON a.room_id=b.id 
                LEFT JOIN tblroom_datesector AS c ON a.datesector_id=c.id order by a.id DESC ';
        $arrange = $db->query($sql);
        //var_dump($arrange);die;
        $smarty->assign('arrange',$arrange);
        $smarty->display('yuyue/yuyue_liebiao.html');
    }

    function handle_liebiao_del_cmd(){
        global $db;
        $res = $db->delete('tblroom_arrangement','id='.$_GET['id']);
        if ($res){
            reload_js('删除成功！','yuyue.php?cmd=liebiao');
        }else{
            reload_js('删除失败！','yuyue.php?cmd=liebiao');
        }
    }

    // 5.配置
    function handle_peizhixiang_cmd(){
        global $db,$smarty;
        $config = $db->fetchOne('tblroom_config');
        $smarty->assign('config',$config);
        $smarty->display('yuyue/yuyue_peizhixiang.html');
    }





