<?php /* Smarty version Smarty-3.1.19, created on 2020-04-26 16:41:05
         compiled from "/home/maveric9/public_html/themes/theme1151/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2804243025ea56c490c85a3-62078326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b64c8aa1d213cdf2c701e6956fd7d68e3f8f7535' => 
    array (
      0 => '/home/maveric9/public_html/themes/theme1151/index.tpl',
      1 => 1587899303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2804243025ea56c490c85a3-62078326',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_HOME_TAB_CONTENT' => 0,
    'HOOK_HOME_TAB' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ea56c490cbc01_98911945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea56c490cbc01_98911945')) {function content_5ea56c490cbc01_98911945($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) {?>
        <ul id="home-page-tabs" class="nav nav-tabs clearfix">
			<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>

		</ul>
	<?php }?>
	<div class="tab-content"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>
</div>
<?php }?>
<?php }} ?>
