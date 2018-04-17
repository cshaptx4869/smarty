<?php
/* Smarty version 3.1.30, created on 2018-04-17 15:40:56
  from "E:\wamp\www\PhpStorm\smarty\templates\yuyue\yuyue_shijianduan.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad5a508528db4_07915553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cc6e3bd8eb9d04fd7f3c2e1d8ff6cc245dc5680' => 
    array (
      0 => 'E:\\wamp\\www\\PhpStorm\\smarty\\templates\\yuyue\\yuyue_shijianduan.html',
      1 => 1523950852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:yuyue/common.html' => 1,
  ),
),false)) {
function content_5ad5a508528db4_07915553 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_243985ad5a5084bcf18_87416111', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21595ad5a5085225a7_27440055', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:yuyue/common.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_243985ad5a5084bcf18_87416111 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
时间段设置<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_21595ad5a5085225a7_27440055 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<table class="table table-bordered table-hover">
    <thead>
    <tr class="">
        <th>编号</th>
        <th>名称</th>
        <th>开始时间</th>
        <th>结束时间</th>
        <th>操作</th>
    </tr>
    </thead>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['time']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['sd_start'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['sd_end'];?>
</td>
        <td align="center">
            <a href="yuyue.php?cmd=shijianduan_edit&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;|&nbsp;
            <a href="yuyue.php?cmd=shijianduan_del&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" onclick="return confirm('确认要删除吗？')"><span class="glyphicon glyphicon-remove" style="color:red;"></span></a>
        </td>
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
