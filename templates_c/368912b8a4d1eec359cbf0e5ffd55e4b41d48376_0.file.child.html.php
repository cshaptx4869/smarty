<?php
/* Smarty version 3.1.30, created on 2018-04-01 16:08:34
  from "D:\wamp\www\smarty3\templates\child.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac0e7e2970f70_08237472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '368912b8a4d1eec359cbf0e5ffd55e4b41d48376' => 
    array (
      0 => 'D:\\wamp\\www\\smarty3\\templates\\child.html',
      1 => 1522591644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:father.html' => 1,
  ),
),false)) {
function content_5ac0e7e2970f70_08237472 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_324005ac0e7e293a284_16989781', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_295775ac0e7e2946267_12585202', "content1");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80785ac0e7e2951d96_41480830', "content2");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_255195ac0e7e2960239_81718672', "content3");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_296285ac0e7e296e129_15136204', "content4");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:father.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_324005ac0e7e293a284_16989781 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
我是子标题<?php
}
}
/* {/block "title"} */
/* {block "content1"} */
class Block_295775ac0e7e2946267_12585202 extends Smarty_Internal_Block
{
public $prepend = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
我是子内容1 prepend 在父模板前添加内容<?php
}
}
/* {/block "content1"} */
/* {block "content2"} */
class Block_80785ac0e7e2951d96_41480830 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
我是子内容2 append 在父模板后添加内容<?php
}
}
/* {/block "content2"} */
/* {block "content3"} */
class Block_255195ac0e7e2960239_81718672 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
$smarty.block.child占位符 我是子内容3<?php
}
}
/* {/block "content3"} */
/* {block "content4"} */
class Block_296285ac0e7e296e129_15136204 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
我是子内容4<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this);
?>
 $smarty.block.parent 占位符<?php
}
}
/* {/block "content4"} */
}
