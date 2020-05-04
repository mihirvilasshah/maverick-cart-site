<?php /* Smarty version Smarty-3.1.19, created on 2020-05-03 14:19:29
         compiled from "/home/maveric9/public_html/themes/theme1151/modules/bankwire/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:698928445eae8599280879-21530795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0518f72b7acdbafbb8e72332af44a298bf6b2b5b' => 
    array (
      0 => '/home/maveric9/public_html/themes/theme1151/modules/bankwire/views/templates/hook/payment.tpl',
      1 => 1587899301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '698928445eae8599280879-21530795',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5eae85992b8968_55189603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eae85992b8968_55189603')) {function content_5eae85992b8968_55189603($_smarty_tpl) {?><div class="row">
	<div class="col-xs-12 col-md-6">
        <p class="payment_module">
            <a class="bankwire" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('bankwire','payment'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
">
            	<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
 
                <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'bankwire'),$_smarty_tpl);?>
</span>
            </a>
        </p>
    </div>
</div><?php }} ?>
