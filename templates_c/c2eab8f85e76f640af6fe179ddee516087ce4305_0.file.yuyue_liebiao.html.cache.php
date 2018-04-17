<?php
/* Smarty version 3.1.30, created on 2018-04-17 14:39:31
  from "E:\wamp\www\PhpStorm\smarty\templates\yuyue\yuyue_liebiao.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad596a3963fa9_58959254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2eab8f85e76f640af6fe179ddee516087ce4305' => 
    array (
      0 => 'E:\\wamp\\www\\PhpStorm\\smarty\\templates\\yuyue\\yuyue_liebiao.html',
      1 => 1523947168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:yuyue/header.html' => 1,
  ),
),false)) {
function content_5ad596a3963fa9_58959254 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\wamp\\www\\PhpStorm\\smarty\\smarty\\plugins\\modifier.date_format.php';
$_smarty_tpl->compiled->nocache_hash = '56545ad596a389dbc7_36311819';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>预约</title>
    <link rel="stylesheet" href="static/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <?php $_smarty_tpl->_subTemplateRender("file:yuyue/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <table class="table table-bordered table-hover">
        <thead>
            <tr class="">
                <th>编号</th>
                <th>场所名</th>
                <th>日期</th>
                <th>时间段</th>
                <th>状态</th>
                <th>主题</th>
                <th>操作</th>
            </tr>
        </thead>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrange']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['val']->value['rooms'];?>
</td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value['dt'],'%Y-%m-%d');?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['val']->value['datesector'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['val']->value['published'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['val']->value['topic'];?>
</td>
                <td><a href="yuyue.php?cmd=liebiao_del&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" onclick="return confirm('确认要删除吗？')">删除</a></td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>
</div>
</body>
</html><?php }
}
