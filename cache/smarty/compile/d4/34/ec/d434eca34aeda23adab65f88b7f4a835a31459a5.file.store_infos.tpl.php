<?php /* Smarty version Smarty-3.1.19, created on 2020-04-26 16:41:08
         compiled from "/home/maveric9/public_html/themes/theme1151/store_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4698214845ea56c4cc9a761-43851093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd434eca34aeda23adab65f88b7f4a835a31459a5' => 
    array (
      0 => '/home/maveric9/public_html/themes/theme1151/store_infos.tpl',
      1 => 1587899301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4698214845ea56c4cc9a761-43851093',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'days_datas' => 0,
    'one_day' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ea56c4cca2cd7_42615957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea56c4cca2cd7_42615957')) {function content_5ea56c4cca2cd7_42615957($_smarty_tpl) {?>

<?php  $_smarty_tpl->tpl_vars['one_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days_datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_day']->key => $_smarty_tpl->tpl_vars['one_day']->value) {
$_smarty_tpl->tpl_vars['one_day']->_loop = true;
?>
	<p>
		<strong class="dark"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['one_day']->value['day']),$_smarty_tpl);?>
: </strong> 
        &nbsp;
        <span><?php echo $_smarty_tpl->tpl_vars['one_day']->value['hours'];?>
</span>
	</p>
<?php } ?>

<?php }} ?>
