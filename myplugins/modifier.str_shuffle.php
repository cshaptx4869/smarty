<?php
    /**
     * @param $str
     * @return string
     * 1.确定自定义插件存放位置 $smarty -> setPluginsDir();
     * 2.文件命名规范,才能通过文件名确定这个文件 modifier.函数名.php
     * 3.函数名规范,才能找到这个文件中的这个函数
     * 4.参数要有规则,第一个必须是要处理的变量,第二个以后才是使用的参数
     */
    function smarty_modifier_str_shuffle($str){
        return str_shuffle($str);
    }