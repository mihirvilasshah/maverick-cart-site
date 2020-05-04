<?php /* Smarty version Smarty-3.1.19, created on 2020-04-26 18:57:47
         compiled from "/home/maveric9/public_html/modules/blocknewsletter/views/templates/admin/list_action_viewcustomer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20328517795ea58c53e65de6-60703194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c24148e61e071f45d8e7537f782e115ae54048ad' => 
    array (
      0 => '/home/maveric9/public_html/modules/blocknewsletter/views/templates/admin/list_action_viewcustomer.tpl',
      1 => 1556683932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20328517795ea58c53e65de6-60703194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'disable' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ea58c53ea9255_95795238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea58c53ea9255_95795238')) {function content_5ea58c53ea9255_95795238($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default <?php if ($_smarty_tpl->tpl_vars['disable']->value) {?>disabled<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
