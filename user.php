<?php
    require_once 'ini.php';

    $smarty->assign('motto','曾经我们坚信不疑的,后来发现根本就没有!');
    $smarty->assign('cities', ['北京','上海','广州','深圳','天津']);
    $smarty->assign('play',['约','不约']);
    $smarty->display('user.html');

    function say(){
        return '一起来玩吧☺!';
    }
    // 自定义函数
    function getSelect($select){
        $str = '<select><option>-请选择-</option>';
        $param = ['北京','上海','广州','深圳','天津'];
        foreach($param as $key=>$row){
            if ($row == $select)
                $str .= '<option selected value="'.$key.'">'.$row.'</option>';
            else
                $str .= '<option value="'.$key.'">'.$row.'</option>';
        }
        $str .= '</select>';
        return $str;
    }
    
