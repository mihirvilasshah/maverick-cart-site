<?php /* Smarty version Smarty-3.1.19, created on 2020-04-25 13:56:55
         compiled from "/home/maveric9/public_html/store/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9936103765ea479e7585e97-30193658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efd6d0cc991b45959d27a395b40f02a12a725bbe' => 
    array (
      0 => '/home/maveric9/public_html/store/themes/default/template/content.tpl',
      1 => 1556664132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9936103765ea479e7585e97-30193658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ea479e75876b4_47836551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea479e75876b4_47836551')) {function content_5ea479e75876b4_47836551($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
