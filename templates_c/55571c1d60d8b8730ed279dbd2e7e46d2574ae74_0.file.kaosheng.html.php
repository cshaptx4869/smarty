<?php
/* Smarty version 3.1.30, created on 2018-04-18 15:15:10
  from "E:\wamp\www\PhpStorm\smarty\templates\kaosheng.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad6f07e497180_89417613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55571c1d60d8b8730ed279dbd2e7e46d2574ae74' => 
    array (
      0 => 'E:\\wamp\\www\\PhpStorm\\smarty\\templates\\kaosheng.html',
      1 => 1522652401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
  ),
),false)) {
function content_5ad6f07e497180_89417613 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>memcache</title>
    <link rel="stylesheet" href="static/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php $_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <table class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th>学号</th>
                <th>姓名</th>
                <th>院系</th>
                <th>专业名</th>
                <th>考生身份</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kaosheng']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['xuehao'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['xingming'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['yuanxi'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['zhuanyem'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['kaoshengsf'];?>
</td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tbody>
        </table>
    </div>
</body>
</html><?php }
}
