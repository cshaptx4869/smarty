<?php
/* Smarty version 3.1.30, created on 2018-04-17 15:42:44
  from "E:\wamp\www\PhpStorm\smarty\templates\yuyue\yuyue_peizhixiang.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad5a5744f5fb5_88777628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed669acb4eebd6d1e312db70189688a865a9b0b9' => 
    array (
      0 => 'E:\\wamp\\www\\PhpStorm\\smarty\\templates\\yuyue\\yuyue_peizhixiang.html',
      1 => 1523950903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:yuyue/common.html' => 1,
  ),
),false)) {
function content_5ad5a5744f5fb5_88777628 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154995ad5a5744e6a21_57278235', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208405ad5a5744f2b60_84265309', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:yuyue/common.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_154995ad5a5744e6a21_57278235 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
配置项设置<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_208405ad5a5744f2b60_84265309 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
