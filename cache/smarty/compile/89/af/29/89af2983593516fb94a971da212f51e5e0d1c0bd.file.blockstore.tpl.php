<?php /* Smarty version Smarty-3.1.19, created on 2020-04-26 07:20:18
         compiled from "/home/maveric9/public_html/themes/theme1151/modules/blockstore/blockstore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10931431705ea56e72507b94-46179544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89af2983593516fb94a971da212f51e5e0d1c0bd' => 
    array (
      0 => '/home/maveric9/public_html/themes/theme1151/modules/blockstore/blockstore.tpl',
      1 => 1587899301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10931431705ea56e72507b94-46179544',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
    'store_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ea56e72510245_36585228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea56e72510245_36585228')) {function content_5ea56e72510245_36585228($_smarty_tpl) {?><!-- Block stores module -->
<section id="stores_block_left" class="block">
	<h4 class="title_block">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>

		</a>
	</h4>
	<div class="block_content blockstore">
		<p class="store_image">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
">
				<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value).((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['store_img']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')));?>
" alt="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
" />
			</a>
		</p>
		<?php if (!empty($_smarty_tpl->tpl_vars['store_text']->value)) {?>
        <p class="store-description">
        	<?php echo $_smarty_tpl->tpl_vars['store_text']->value;?>

        </p>
        <?php }?>
		<div>
			<a class="btn btn-default btn-sm icon-right" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
">
				<span>
                	<?php echo smartyTranslate(array('s'=>'Discover our stores','mod'=>'blockstore'),$_smarty_tpl);?>

                </span>
			</a>
		</div>
	</div>
</section>
<!-- /Block stores module -->
<?php }} ?>
