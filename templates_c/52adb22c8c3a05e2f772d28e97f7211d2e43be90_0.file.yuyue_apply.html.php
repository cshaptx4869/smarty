<?php
/* Smarty version 3.1.30, created on 2018-04-18 15:18:43
  from "E:\wamp\www\PhpStorm\smarty\templates\yuyue\yuyue_apply.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad6f1533824a0_91851573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52adb22c8c3a05e2f772d28e97f7211d2e43be90' => 
    array (
      0 => 'E:\\wamp\\www\\PhpStorm\\smarty\\templates\\yuyue\\yuyue_apply.html',
      1 => 1524034179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:yuyue/common.html' => 1,
  ),
),false)) {
function content_5ad6f1533824a0_91851573 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52965ad6f153331857_97145414', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79775ad6f15337bfb1_93793570', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:yuyue/common.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_52965ad6f153331857_97145414 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
预约申请<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_79775ad6f15337bfb1_93793570 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="yuyue.php" method="post">
    <h3>预约申请</h3>
    <table class="table">
        <tr>
            <td>场所：</td>
            <td><?php echo $_smarty_tpl->tpl_vars['room']->value['title'];?>
</td>
        </tr>
        <tr>
            <td>时间段：</td>
            <td><?php echo $_smarty_tpl->tpl_vars['datesector']->value['sd_start'];?>
-<?php echo $_smarty_tpl->tpl_vars['datesector']->value['sd_end'];?>
</td>
        </tr>
        <tr>
            <td>会议主题：</td>
            <td><input type="text" name="topic"></td>
        </tr>
        <tr>
            <td>预约人：</td>
            <td><input type="text" name="whom"></td>
        </tr>
        <tr>
            <td>联系电话：</td>
            <td><input type="text" name="tele"></td>
        </tr>
        <tr>
            <td>申请单位：</td>
            <td><input type="text" name="organization"></td>
        </tr>
        <tr>
            <td>详细内容：</td>
            <td><textarea name="content" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button class="btn btn-primary">提交</button>
                <input type="hidden" name="room_id" value="<?php echo $_smarty_tpl->tpl_vars['room_id']->value;?>
">
                <input type="hidden" name="dt" value="<?php echo $_smarty_tpl->tpl_vars['dt']->value;?>
">
                <input type="hidden" name="sd_start" value="<?php echo $_smarty_tpl->tpl_vars['datesector']->value['sd_start'];?>
">
                <input type="hidden" name="sd_end" value="<?php echo $_smarty_tpl->tpl_vars['datesector']->value['sd_end'];?>
">
                <input type="hidden" name="datesector_id" value="<?php echo $_smarty_tpl->tpl_vars['datesector_id']->value;?>
">
                <input type="hidden" name="cmd" value="apply">
                <input type="hidden" name="postflag" value="1">
            </td>
        </tr>
    </table>
</form>
<?php
}
}
/* {/block "content"} */
}
