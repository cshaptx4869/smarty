<?php
/* Smarty version 3.1.30, created on 2018-04-17 15:38:47
  from "E:\wamp\www\PhpStorm\smarty\templates\yuyue\yuyue_changsuo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad5a487b6e310_28918573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa5210be3a13736424dd5ed6ac0ca97f3bdb3f41' => 
    array (
      0 => 'E:\\wamp\\www\\PhpStorm\\smarty\\templates\\yuyue\\yuyue_changsuo.html',
      1 => 1523950726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:yuyue/common.html' => 1,
  ),
),false)) {
function content_5ad5a487b6e310_28918573 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_291565ad5a487b210f0_61053883', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98055ad5a487b69697_20077684', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:yuyue/common.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_291565ad5a487b210f0_61053883 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
场所设置<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_98055ad5a487b69697_20077684 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<table class="table table-bordered table-hover">
    <thead>
    <tr class="">
        <th>编号</th>
        <th>名称</th>
        <th>上移</th>
        <th>下移</th>
        <th>操作</th>
    </tr>
    </thead>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['room']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</td>
        <td align="center"><a href=""><span class="glyphicon glyphicon-arrow-up"></span></a></td>
        <td align="center"><a href=""><span class="glyphicon glyphicon-arrow-down"></span></a></td>
        <td align="center"><a href="yuyue.php?cmd=changsuo_del&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" onclick="return confirm('确认要删除吗？')"><span class="glyphicon glyphicon-remove" style="color:red;"></span></a></td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
<?php
}
}
/* {/block "content"} */
}
