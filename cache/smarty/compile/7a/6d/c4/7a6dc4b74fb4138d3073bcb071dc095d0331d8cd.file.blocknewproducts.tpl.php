<?php /* Smarty version Smarty-3.1.19, created on 2020-04-26 07:20:18
         compiled from "/home/maveric9/public_html/themes/theme1151/modules/blocknewproducts/blocknewproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7442162475ea56e724bfae6-85008623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a6dc4b74fb4138d3073bcb071dc095d0331d8cd' => 
    array (
      0 => '/home/maveric9/public_html/themes/theme1151/modules/blocknewproducts/blocknewproducts.tpl',
      1 => 1587899301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7442162475ea56e724bfae6-85008623',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'new_products' => 0,
    'newproduct' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'priceDisplay' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ea56e724d36d6_42940177',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea56e724d36d6_42940177')) {function content_5ea56e724d36d6_42940177($_smarty_tpl) {?><!-- MODULE Block new products -->
<section id="new-products_block_right" class="block products_block">
	<h4 class="title_block">
    	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'New products','mod'=>'blocknewproducts'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'New products','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</a>
    </h4>
    <div class="block_content products-block">
        <?php if ($_smarty_tpl->tpl_vars['new_products']->value!==false) {?>
            <ul class="products">
                <?php  $_smarty_tpl->tpl_vars['newproduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newproduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newproduct']->key => $_smarty_tpl->tpl_vars['newproduct']->value) {
$_smarty_tpl->tpl_vars['newproduct']->_loop = true;
?>
                    <li class="clearfix">
                        <a class="products-block-image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newproduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newproduct']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
"><img class="replace-2x img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['newproduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['newproduct']->value['id_image'],'tm_small_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newproduct']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" /></a>
                        <div class="product-content">
                        	<h5>
                            	<a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newproduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newproduct']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['newproduct']->value['name']), ENT_QUOTES, 'UTF-8', true);?>
</a>
                            </h5>
                        	<p class="product-description"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['newproduct']->value['description_short']),75,'...');?>
</p>
                            <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['newproduct']->value['show_price'])&&$_smarty_tpl->tpl_vars['newproduct']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['newproduct']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['newproduct']->value['available_for_order'])))) {?>
                            	<?php if (isset($_smarty_tpl->tpl_vars['newproduct']->value['show_price'])&&$_smarty_tpl->tpl_vars['newproduct']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
                                    <div class="price-box">
                                        <span class="price">
                                        	<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['newproduct']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['newproduct']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
                                        </span>
                                    </div>
                                <?php }?>
                            <?php }?>
                        </div>
                    </li>
                <?php } ?>
            </ul>
            <div>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'All new products','mod'=>'blocknewproducts'),$_smarty_tpl);?>
" class="btn btn-default btn-sm icon-right">
                	<span>
                    	<?php echo smartyTranslate(array('s'=>'All new products','mod'=>'blocknewproducts'),$_smarty_tpl);?>

                    </span>
                </a>
            </div>
        <?php } else { ?>
        	<p>&raquo; <?php echo smartyTranslate(array('s'=>'Do not allow new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</p>
        <?php }?>
    </div>
</section>
<!-- /MODULE Block new products --><?php }} ?>
