<?php
/* Smarty version 3.1.30, created on 2018-04-02 14:50:25
  from "E:\wamp\www\PhpStorm\smarty\templates\father.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac1d2b16c9f96_79945401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61cae2395e6a4c300e9852e4d334e0a2f667522d' => 
    array (
      0 => 'E:\\wamp\\www\\PhpStorm\\smarty\\templates\\father.html',
      1 => 1522631053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
  ),
),false)) {
function content_5ac1d2b16c9f96_79945401 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159225ac1d2b1677528_31505744', "title");
?>
</title>
    <link rel="stylesheet" href="static/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php $_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_264995ac1d2b168fd28_37115253', "content1");
?>
 <br>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115205ac1d2b169f0f6_71581911', "content2");
?>
 <br>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_228415ac1d2b16b0499_67442856', "content3");
?>
 <br>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29425ac1d2b16c4d54_84342989', "content4");
?>

    </div>
</body>
</html><?php }
/* {block "title"} */
class Block_159225ac1d2b1677528_31505744 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
我是父级<?php
}
}
/* {/block "title"} */
/* {block "content1"} */
class Block_264995ac1d2b168fd28_37115253 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
我是父级的内容1<?php
}
}
/* {/block "content1"} */
/* {block "content2"} */
class Block_115205ac1d2b169f0f6_71581911 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
我是父级的内容2<?php
}
}
/* {/block "content2"} */
/* {block "content3"} */
class Block_228415ac1d2b16b0499_67442856 extends Smarty_Internal_Block
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
class Block_29425ac1d2b16c4d54_84342989 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
我是父级的内容4<?php
}
}
/* {/block "content4"} */
}
