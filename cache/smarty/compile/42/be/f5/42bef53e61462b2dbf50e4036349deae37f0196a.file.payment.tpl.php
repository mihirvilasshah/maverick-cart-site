<?php /* Smarty version Smarty-3.1.19, created on 2020-05-03 14:19:29
         compiled from "/home/maveric9/public_html/themes/theme1151/modules/cheque/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3030844005eae85992c29d4-63857385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42bef53e61462b2dbf50e4036349deae37f0196a' => 
    array (
      0 => '/home/maveric9/public_html/themes/theme1151/modules/cheque/views/templates/hook/payment.tpl',
      1 => 1587899301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3030844005eae85992c29d4-63857385',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5eae85992c67c3_83619538',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eae85992c67c3_83619538')) {function content_5eae85992c67c3_83619538($_smarty_tpl) {?><div class="row">
	<div class="col-xs-12 col-md-6">
        <p class="payment_module">
            <a class="cheque" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cheque','payment',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by check.','mod'=>'cheque'),$_smarty_tpl);?>
">
                <?php echo smartyTranslate(array('s'=>'Pay by check','mod'=>'cheque'),$_smarty_tpl);?>
 
                <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'cheque'),$_smarty_tpl);?>
</span>
            </a>
        </p>
    </div>
</div>
<?php }} ?>
