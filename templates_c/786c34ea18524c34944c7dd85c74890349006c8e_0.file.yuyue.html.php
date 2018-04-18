<?php
/* Smarty version 3.1.30, created on 2018-04-18 15:10:22
  from "E:\wamp\www\PhpStorm\smarty\templates\yuyue\yuyue.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad6ef5ec23580_22427316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '786c34ea18524c34944c7dd85c74890349006c8e' => 
    array (
      0 => 'E:\\wamp\\www\\PhpStorm\\smarty\\templates\\yuyue\\yuyue.html',
      1 => 1524033890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:yuyue/common.html' => 1,
  ),
),false)) {
function content_5ad6ef5ec23580_22427316 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\wamp\\www\\PhpStorm\\smarty\\smarty\\plugins\\modifier.date_format.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178805ad6ef5ea805c0_09257867', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156655ad6ef5ec10b11_73005323', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:yuyue/common.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_178805ad6ef5ea805c0_09257867 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
预约<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_156655ad6ef5ec10b11_73005323 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('offset_prev', $_smarty_tpl->tpl_vars['week_period']->value['start']-86400);
$_smarty_tpl->_assignInScope('offset_next', $_smarty_tpl->tpl_vars['week_period']->value['end']+86400);
?>
<div >
    <p style='padding:5px 0px'>★提示：需提前一天预约</p>
    <table border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td width="30"><div class="day_verify">&nbsp;</div></td>
            <td width="80">&nbsp;待审核 </td>
            <td width="50" bgcolor="#FEE58F">&nbsp;</td>
            <td width="30" ><div class="day_used">&nbsp;</div></td>
            <td width="80">&nbsp;已预订</td>
            <td width="50" bgcolor="#89D6FF">&nbsp;</td>
        </tr>
    </table>
</div>
<p class="text-center">
    [<a href="yuyue.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset_prev']->value;?>
" class="yxbs1">上一周</a>]
    [<a href="yuyue.php" class="yxbs1">本周</a>]
    [<a href="yuyue.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset_next']->value;?>
" class="yxbs1">下一周</a>]
</p>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th colspan="2" class="text-center">场所</th>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rooms']->value, 'room');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['room']->value) {
?>
            <th style="line-height:160%">
                <?php echo $_smarty_tpl->tpl_vars['room']->value['title'];?>
<br /><span style="font-weight:normal">（容量：<?php echo $_smarty_tpl->tpl_vars['room']->value['max_number'];?>
人）</span>
            </th>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tr>
    </thead>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['weekdays']->value, 'weekday');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['weekday']->value) {
?>
        <tr>
            <td rowspan="<?php echo count($_smarty_tpl->tpl_vars['datesectors']->value)+1;?>
" align="center">
                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['weekday']->value,"%Y-%m-%d");?>
 <br>星期<?php echo trans_week(smarty_modifier_date_format($_smarty_tpl->tpl_vars['weekday']->value,"%w"));?>

            </td>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datesectors']->value, 'time', false, 'datesector_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['datesector_id']->value => $_smarty_tpl->tpl_vars['time']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</td>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rooms']->value, 'room');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['room']->value) {
?>
                <?php $_smarty_tpl->_assignInScope('room_id', $_smarty_tpl->tpl_vars['room']->value['id']);
?>
                <td <?php echo get_arrange_class_name($_smarty_tpl->tpl_vars['arrangements_class']->value[$_smarty_tpl->tpl_vars['weekday']->value][$_smarty_tpl->tpl_vars['room_id']->value][$_smarty_tpl->tpl_vars['datesector_id']->value]);?>
 <?php if ($_smarty_tpl->tpl_vars['weekday']->value > time()) {?> onclick="arrange(this,<?php echo $_smarty_tpl->tpl_vars['weekday']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['room_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['datesector_id']->value;?>
)" style="cursor:pointer;" <?php }?> >
                    <?php if ($_smarty_tpl->tpl_vars['arrangements']->value[$_smarty_tpl->tpl_vars['weekday']->value][$_smarty_tpl->tpl_vars['room_id']->value][$_smarty_tpl->tpl_vars['datesector_id']->value]) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrangements']->value[$_smarty_tpl->tpl_vars['weekday']->value][$_smarty_tpl->tpl_vars['room_id']->value][$_smarty_tpl->tpl_vars['datesector_id']->value], 'arr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->value) {
?>
                            <?php echo $_smarty_tpl->tpl_vars['arr']->value['organization'];?>
<br /><?php echo $_smarty_tpl->tpl_vars['arr']->value['tm'];?>
<br /><?php echo $_smarty_tpl->tpl_vars['arr']->value['topic'];?>

                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <?php }?>
                </td>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <tfoot>
        <tr>
            <th colspan="2">场所</th>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rooms']->value, 'room');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['room']->value) {
?>
            <th style="line-height:160%">
                <?php echo $_smarty_tpl->tpl_vars['room']->value['title'];?>
<br /><span style="font-weight:normal">（容量：<?php echo $_smarty_tpl->tpl_vars['room']->value['max_number'];?>
人）</span>
            </th>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tr>
    </tfoot>
</table>
<p class="text-center">
    [<a href="yuyue.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset_prev']->value;?>
" class="yxbs1">上一周</a>]
    [<a href="yuyue.php" class="yxbs1">本周</a>]
    [<a href="yuyue.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset_next']->value;?>
" class="yxbs1">下一周</a>]
</p>
<?php echo '<script'; ?>
 type="text/javascript">
    
    function arrange(obj, dt, room_id, datesector_id) {
        window.open('yuyue.php?cmd=apply&dt=' + dt + '&room_id=' + room_id + '&datesector_id=' + datesector_id);
    }
    
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
}
