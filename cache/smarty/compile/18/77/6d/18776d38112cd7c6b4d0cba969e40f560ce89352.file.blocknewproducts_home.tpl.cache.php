<?php /* Smarty version Smarty-3.1.19, created on 2020-04-26 16:41:04
         compiled from "/home/maveric9/public_html/themes/theme1151/modules/blocknewproducts/blocknewproducts_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4705539525ea56c48eddec5-21995201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18776d38112cd7c6b4d0cba969e40f560ce89352' => 
    array (
      0 => '/home/maveric9/public_html/themes/theme1151/modules/blocknewproducts/blocknewproducts_home.tpl',
      1 => 1587899301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4705539525ea56c48eddec5-21995201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ea56c48ee1081_96813309',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea56c48ee1081_96813309')) {function content_5ea56c48ee1081_96813309($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['new_products']->value)&&$_smarty_tpl->tpl_vars['new_products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'class'=>'blocknewproducts tab-pane','id'=>'blocknewproducts'), 0);?>

<?php } else { ?>
    <ul id="blocknewproducts" class="blocknewproducts tab-pane">
        <li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</li>
    </ul>
<?php }?><?php }} ?>
