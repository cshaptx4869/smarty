<?php
/* Smarty version 3.1.30, created on 2018-04-18 15:10:22
  from "E:\wamp\www\PhpStorm\smarty\templates\yuyue\common.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad6ef5ec786c1_23282411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '290203cd22139d1f623f48e83b923e529bc95b7f' => 
    array (
      0 => 'E:\\wamp\\www\\PhpStorm\\smarty\\templates\\yuyue\\common.html',
      1 => 1524028376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:yuyue/header.html' => 1,
  ),
),false)) {
function content_5ad6ef5ec786c1_23282411 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106475ad6ef5ec4f0a3_82388980', "title");
?>
</title>
    <link rel="stylesheet" href="static/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <hr>
    <?php $_smarty_tpl->_subTemplateRender("file:yuyue/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <hr>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_265005ad6ef5ec6c7f8_58584206', "content");
?>

</div>
</body>
</html><?php }
/* {block "title"} */
class Block_106475ad6ef5ec4f0a3_82388980 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
父级模版<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_265005ad6ef5ec6c7f8_58584206 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
父级内容<?php
}
}
/* {/block "content"} */
}
