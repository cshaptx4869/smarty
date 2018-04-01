<?php
    /**
     * @param $param
     * @param $smarty
     * @return string
     * 1.命名规则和modifier类似
     * 2.需要声明两个参数:
     *      第一个参数,模版中传递给模版函数的所有属性组成的关联数组
     *      第二个参数,接收自动传入的Smarty对象,可调用Smarty对象中的成员
     */
    function smarty_function_radio($param,$smarty){
        $str = '';
        if (isset($param['data']) && !empty($param['data'])){
            foreach($param['data'] as $key=>$row){
                if (isset($param['checked'])){
                    $str .= '<label><input type="radio" name="'.$param['name'].'" value="'.$key.'" checked>'.$row.'</label> ';
                }else{
                    $str .= '<label><input type="radio" name="'.$param['name'].'" value="'.$key.'">'.$row.'</label> ';
                }
            }
        }
        return $str;
    }