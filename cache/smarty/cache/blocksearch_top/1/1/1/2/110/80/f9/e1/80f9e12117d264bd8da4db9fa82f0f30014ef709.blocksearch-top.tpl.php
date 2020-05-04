<?php /*%%SmartyHeaderCode:6184701315ea56c48c116d3-24322234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80f9e12117d264bd8da4db9fa82f0f30014ef709' => 
    array (
      0 => '/home/maveric9/public_html/themes/theme1151/modules/blocksearch/blocksearch-top.tpl',
      1 => 1587899301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6184701315ea56c48c116d3-24322234',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ea56c4cc718a2_67442940',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea56c4cc718a2_67442940')) {function content_5ea56c4cc718a2_67442940($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="clearfix">
	<form id="searchbox" method="get" action="//maverick-cart.com/index.php?controller=search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Search</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
