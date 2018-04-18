<?php
/* Smarty version 3.1.30, created on 2018-04-18 15:15:51
  from "E:\wamp\www\PhpStorm\smarty\templates\child.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad6f0a7985a14_47598112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16016dc1267c00339b93b34f7a9598d404b736a0' => 
    array (
      0 => 'E:\\wamp\\www\\PhpStorm\\smarty\\templates\\child.html',
      1 => 1522631053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:father.html' => 1,
  ),
),false)) {
function content_5ad6f0a7985a14_47598112 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81085ad6f0a79385f1_67647447', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52375ad6f0a79491e1_87055095', "content1");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30825ad6f0a7961285_90124517', "content2");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_236755ad6f0a79700c7_59643975', "content3");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27125ad6f0a7981fe4_51222915', "content4");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:father.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_81085ad6f0a79385f1_67647447 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
我是子标题<?php
}
}
/* {/block "title"} */
/* {block "content1"} */
class Block_52375ad6f0a79491e1_87055095 extends Smarty_Internal_Block
{
public $prepend = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
我是子内容1 prepend 在父模板前添加内容<?php
}
}
/* {/block "content1"} */
/* {block "content2"} */
class Block_30825ad6f0a7961285_90124517 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
我是子内容2 append 在父模板后添加内容<?php
}
}
/* {/block "content2"} */
/* {block "content3"} */
class Block_236755ad6f0a79700c7_59643975 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
$smarty.block.child占位符 我是子内容3<?php
}
}
/* {/block "content3"} */
/* {block "content4"} */
class Block_27125ad6f0a7981fe4_51222915 extends Smarty_Internal_Block
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
