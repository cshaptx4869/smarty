<?php
/* Smarty version 3.1.30, created on 2018-04-01 16:08:34
  from "D:\wamp\www\smarty3\templates\father.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac0e7e29d0ec5_78546088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78bff7a140e25cbf95f79e5282aa20c198ac8884' => 
    array (
      0 => 'D:\\wamp\\www\\smarty3\\templates\\father.html',
      1 => 1522591576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
  ),
),false)) {
function content_5ac0e7e29d0ec5_78546088 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98825ac0e7e29952d8_27826887', "title");
?>
</title>
    <link rel="stylesheet" href="static/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php $_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30195ac0e7e29aad45_93766300', "content1");
?>
 <br>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40085ac0e7e29b5641_15735925', "content2");
?>
 <br>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27535ac0e7e29c2103_79902512', "content3");
?>
 <br>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47105ac0e7e29ccb79_88539954', "content4");
?>

    </div>
</body>
</html><?php }
/* {block "title"} */
class Block_98825ac0e7e29952d8_27826887 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
我是父级<?php
}
}
/* {/block "title"} */
/* {block "content1"} */
class Block_30195ac0e7e29aad45_93766300 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
我是父级的内容1<?php
}
}
/* {/block "content1"} */
/* {block "content2"} */
class Block_40085ac0e7e29b5641_15735925 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
我是父级的内容2<?php
}
}
/* {/block "content2"} */
/* {block "content3"} */
class Block_27535ac0e7e29c2103_79902512 extends Smarty_Internal_Block
{
public $callsChild = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
我是父级的内容3<?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
}
}
/* {/block "content3"} */
/* {block "content4"} */
class Block_47105ac0e7e29ccb79_88539954 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
我是父级的内容4<?php
}
}
/* {/block "content4"} */
}
