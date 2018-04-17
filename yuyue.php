<?php
    require_once 'ini.php';

    $smarty->caching = false;

    $cmd = !empty($_GET['cmd'])?$_GET['cmd']:'yuyue';
    $func = 'handle_' . $cmd . '_cmd';
    call_user_func($func);
    // 预约
    function handle_yuyue_cmd(){
        global $db,$smarty;

        $smarty->display('yuyue/yuyue.html');
    }

    // 时间段
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

    // 场所
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

    // 列表
    function handle_liebiao_cmd(){
        global $db,$smarty;
        $sql = 'select a.*,b.title AS rooms,c.title AS datesector from tblroom_arrangement AS a 
                LEFT JOIN tblroom_rooms AS b ON a.room_id=b.id 
                LEFT JOIN tblroom_datesector AS c ON a.datesector_id=c.id';
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

    //配置
    function handle_peizhixiang_cmd(){
        global $db,$smarty;
        $config = 1;
        $smarty->assign('config',$config);
        $smarty->display('yuyue/yuyue_peizhixiang.html');
    }





