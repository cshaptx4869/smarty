<?php
/* Smarty version 3.1.30, created on 2018-04-02 14:50:24
  from "E:\wamp\www\PhpStorm\smarty\templates\user.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac1d2b07209c4_71275722',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '8de19daea8c3f44ffcdebb88e5c2c2db5ab55347' => 
    array (
      0 => 'E:\\wamp\\www\\PhpStorm\\smarty\\templates\\user.html',
      1 => 1522631053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
  ),
),false)) {
function content_5ac1d2b07209c4_71275722 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'E:\\wamp\\www\\PhpStorm\\smarty\\smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_function_radio')) require_once 'E:\\wamp\\www\\PhpStorm\\smarty\\myplugins\\function.radio.php';
if (!is_callable('smarty_modifier_str_shuffle')) require_once 'E:\\wamp\\www\\PhpStorm\\smarty\\myplugins\\modifier.str_shuffle.php';
if (!is_callable('smarty_block_repeat_words')) require_once 'E:\\wamp\\www\\PhpStorm\\smarty\\myplugins\\block.repeat_words.php';
$_smarty_tpl->compiled->nocache_hash = '176415ac1d2b0411799_39425468';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>demo</title>
    <link rel="stylesheet" href="static/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php $_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        
        <?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'smarty.conf', "appear", 0);
?>

        <p>
            我是<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'name');?>
,今年<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'age');?>
岁,身高<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'height');?>
,我的座右铭是"<?php echo $_smarty_tpl->tpl_vars['motto']->value;?>
" <br>
            <?php echo mb_strtoupper('come on', 'UTF-8');?>
 <br>
            <?php echo smarty_modifier_truncate('今天我上街,看见一个人,脸上的痘痘数也数不清,大的像黄豆,小的像芝麻,最小的最小的还有二郎豆',20,'...',true);?>
 <br>
            <?php echo smarty_modifier_truncate('abcdefghijklmnopqrstuvwxyz',20,'...',true,true);?>
 <br>
            <?php echo say();?>
 <br>
            
            <?php echo '/*%%SmartyNocache:176415ac1d2b0411799_39425468%%*/<?php echo date(\'Y-m-d H:i:s\');?>
/*/%%SmartyNocache:176415ac1d2b0411799_39425468%%*/';?>

            
            坐标:<?php echo getSelect('上海');
echo select(array('data'=>$_smarty_tpl->tpl_vars['cities']->value,'selected'=>"北京"),$_smarty_tpl);?>
 <?php echo smarty_function_radio(array('data'=>$_smarty_tpl->tpl_vars['play']->value,'checked'=>'约','name'=>'play'),$_smarty_tpl);?>
<br>
            <?php echo strtotime('2018-12-12');?>

            胡言乱语:<?php echo smarty_modifier_str_shuffle('abcdefghijklmnopqrstuvwxyz!@#$%^&*()_+');?>
 <br>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('repeat_words', array('size'=>"20",'color'=>'#71C58E','num'=>"5"));
$_block_repeat1=true;
echo smarty_block_repeat_words(array('size'=>"20",'color'=>'#71C58E','num'=>"5"), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>

                浪起来,浪起来...
            <?php $_block_repeat1=false;
echo smarty_block_repeat_words(array('size'=>"20",'color'=>'#71C58E','num'=>"5"), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        </p>
    </div>
</body>
</html><?php }
}
