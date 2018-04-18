<?php
/* Smarty version 3.1.30, created on 2018-04-18 15:15:14
  from "E:\wamp\www\PhpStorm\smarty\templates\yuyue\yuyue_liebiao.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad6f082639085_96272995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2eab8f85e76f640af6fe179ddee516087ce4305' => 
    array (
      0 => 'E:\\wamp\\www\\PhpStorm\\smarty\\templates\\yuyue\\yuyue_liebiao.html',
      1 => 1524034953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:yuyue/common.html' => 1,
  ),
),false)) {
function content_5ad6f082639085_96272995 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\wamp\\www\\PhpStorm\\smarty\\smarty\\plugins\\modifier.date_format.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89885ad6f08255de43_02027299', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110455ad6f08262f186_63950541', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:yuyue/common.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_89885ad6f08255de43_02027299 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
预约列表<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_110455ad6f08262f186_63950541 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<table class="table table-bordered table-hover">
    <thead>
        <tr class="">
            <th>编号</th>
            <th>场所名</th>
            <th>预约日期</th>
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
 <?php echo $_smarty_tpl->tpl_vars['val']->value['sd_start'];?>
-<?php echo $_smarty_tpl->tpl_vars['val']->value['sd_end'];?>
</td>
            <td><?php if ($_smarty_tpl->tpl_vars['val']->value['published'] == 1) {?>通过<?php } elseif ($_smarty_tpl->tpl_vars['val']->value['published'] == 2) {?>未通过<?php } elseif ($_smarty_tpl->tpl_vars['val']->value['published'] == 3) {?>待审核<?php }?></td>
            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['topic'];?>
</td>
            <td align="center">
                <a href="yuyue.php?cmd=liebiao_del&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" onclick="return confirm('确认要删除吗？')">
                    <span class="glyphicon glyphicon-remove" style="color:red;"></span>
                </a>
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
