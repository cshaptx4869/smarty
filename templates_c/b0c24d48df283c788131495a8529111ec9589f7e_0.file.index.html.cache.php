<?php
/* Smarty version 3.1.30, created on 2018-04-18 15:10:15
  from "E:\wamp\www\PhpStorm\smarty\templates\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad6ef570d1b63_76987424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0c24d48df283c788131495a8529111ec9589f7e' => 
    array (
      0 => 'E:\\wamp\\www\\PhpStorm\\smarty\\templates\\index.html',
      1 => 1522631053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
  ),
),false)) {
function content_5ad6ef570d1b63_76987424 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'E:\\wamp\\www\\PhpStorm\\smarty\\smarty\\plugins\\modifier.truncate.php';
$_smarty_tpl->compiled->nocache_hash = '109335ad6ef56e23947_14747072';
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
        <?php $_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>标题</th>
                    <th>内容</th>
                    <th>点击量</th>
                    <th>发布日期</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['heading'];?>
</td>
                    <td><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['v']->value['content']),100);?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['visitcount'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['dt'];?>
</td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <tr>
                    <td colspan="5">
                        <a href="index.php">首页</a>
                        <?php if ($_smarty_tpl->tpl_vars['page']->value-1 < 0) {?> 上一页
                        <?php } else { ?>
                        <a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">上一页</a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['page']->value+1 > $_smarty_tpl->tpl_vars['totalpage']->value) {?> 下一页
                        <?php } else { ?>
                        <a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">下一页</a>
                        <?php }?>
                        <a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['totalpage']->value;?>
">尾页</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html><?php }
}
