<?php /* Smarty version Smarty-3.1.19, created on 2020-04-26 07:20:09
         compiled from "/home/maveric9/public_html/themes/theme1151/modules/blockpermanentlinks/blockpermanentlinks-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9056800365ea56e69109250-96581309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42f5f05055b0b2006c1b49cf398a76a28be0fe86' => 
    array (
      0 => '/home/maveric9/public_html/themes/theme1151/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1587899301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9056800365ea56e69109250-96581309',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ea56e6910e6d8_50526678',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea56e6910e6d8_50526678')) {function content_5ea56e6910e6d8_50526678($_smarty_tpl) {?><!-- Block permanent links module HEADER -->
<ul id="header_links">
	<li id="header_link_contact">
    	<a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='contact') {?>class="active"<?php }?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'contact','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'contact','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a>
    </li>
	<li id="header_link_sitemap">
    	<a <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='sitemap') {?>class="active"<?php }?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('sitemap'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'sitemap','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'sitemap','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a>
    </li>
</ul>
<!-- /Block permanent links module HEADER -->
<?php }} ?>
