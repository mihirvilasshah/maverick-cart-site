<?php /* Smarty version Smarty-3.1.19, created on 2020-04-26 07:20:08
         compiled from "/home/maveric9/public_html/themes/theme1151/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13724508815ea56e68ecf6d0-59626626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c4336d2bc936c1ddda9c1432d34ded1925abb29' => 
    array (
      0 => '/home/maveric9/public_html/themes/theme1151/modules/homefeatured/homefeatured.tpl',
      1 => 1587899301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13724508815ea56e68ecf6d0-59626626',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ea56e68ed5a37_08126112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea56e68ed5a37_08126112')) {function content_5ea56e68ed5a37_08126112($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
