<?php
/* Smarty version 3.1.30, created on 2018-04-18 15:15:12
  from "E:\wamp\www\PhpStorm\smarty\templates\yuyue\yuyue_peizhixiang.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad6f08091f106_16607607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed669acb4eebd6d1e312db70189688a865a9b0b9' => 
    array (
      0 => 'E:\\wamp\\www\\PhpStorm\\smarty\\templates\\yuyue\\yuyue_peizhixiang.html',
      1 => 1523952052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:yuyue/common.html' => 1,
  ),
),false)) {
function content_5ad6f08091f106_16607607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_249375ad6f080908d57_42095071', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102225ad6f08091ae88_92004322', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:yuyue/common.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_249375ad6f080908d57_42095071 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
配置项设置<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_102225ad6f08091ae88_92004322 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    暂无
<?php
}
}
/* {/block "content"} */
}
