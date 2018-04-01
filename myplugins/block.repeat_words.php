<?php
    /**
     * @param $params
     * @param $content
     * @param $smarty
     * @param $repeat
     * @return string
     * 默认情况下.函数会被调用两次:1.开始标签,2.结束标签
     * 参数:
     *  $content 如果是被开始标签调用,则为NULL; 若是被闭合标签,则为模板块的内容
     *  $repeat 默认首次调用为true,随后始终为false
     */
    function smarty_block_repeat_words($params,$content,$smarty,&$repeat){
        // 仅输出关闭标签
        if ($repeat==false) {
            $str = '';
            for ($i=0; $i <$params['num'] ; $i++) {
                $str .= '<font color="'.$params['color'].'" size="'.$params['size'].'">'.$content.'</font><br>';
            }
            return $str;   
        }
    }