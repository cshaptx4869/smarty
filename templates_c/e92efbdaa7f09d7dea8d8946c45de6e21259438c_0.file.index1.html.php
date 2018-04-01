<?php
/* Smarty version 3.1.30, created on 2018-04-01 16:08:31
  from "D:\wamp\www\smarty3\templates\index1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac0e7dfe0ffc3_16689519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e92efbdaa7f09d7dea8d8946c45de6e21259438c' => 
    array (
      0 => 'D:\\wamp\\www\\smarty3\\templates\\index1.html',
      1 => 1522305296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
  ),
),false)) {
function content_5ac0e7dfe0ffc3_16689519 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="static/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php $_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>用户名</th>
                    <th>性别</th>
                    <th>爱好</th>
                    <th>注册时间</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><?php echo time();?>
</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html><?php }
}
