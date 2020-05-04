<?php /* Smarty version Smarty-3.1.19, created on 2020-04-26 16:45:04
         compiled from "/home/maveric9/public_html/store/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8663523865ea56d38b08cf3-58898765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17027c79dd1e853747279f6c3ac2f0776f8ff06f' => 
    array (
      0 => '/home/maveric9/public_html/store/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1556664132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8663523865ea56d38b08cf3-58898765',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ea56d38b10955_33020562',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea56d38b10955_33020562')) {function content_5ea56d38b10955_33020562($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a>
<?php }} ?>
