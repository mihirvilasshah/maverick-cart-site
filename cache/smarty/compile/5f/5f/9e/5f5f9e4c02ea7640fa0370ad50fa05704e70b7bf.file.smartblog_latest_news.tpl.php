<?php /* Smarty version Smarty-3.1.19, created on 2020-04-26 07:20:08
         compiled from "/home/maveric9/public_html/themes/theme1151/modules/smartbloghomelatestnews/views/templates/front/smartblog_latest_news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20098554185ea56e68dd2e82-76576397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f5f9e4c02ea7640fa0370ad50fa05704e70b7bf' => 
    array (
      0 => '/home/maveric9/public_html/themes/theme1151/modules/smartbloghomelatestnews/views/templates/front/smartblog_latest_news.tpl',
      1 => 1587899301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20098554185ea56e68dd2e82-76576397',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hide_left_column' => 0,
    'hide_right_column' => 0,
    'view_data' => 0,
    'nbLi' => 0,
    'nbItemsPerLine' => 0,
    'nbItemsPerLineTablet' => 0,
    'nbItemsPerLineMobile' => 0,
    'totModulo' => 0,
    'totModuloTablet' => 0,
    'totModuloMobile' => 0,
    'post' => 0,
    'options' => 0,
    'modules_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ea56e68e01860_92037235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea56e68e01860_92037235')) {function content_5ea56e68e01860_92037235($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/home/maveric9/public_html/tools/smarty/plugins/function.math.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/maveric9/public_html/tools/smarty/plugins/modifier.date_format.php';
?>
<?php if (($_smarty_tpl->tpl_vars['hide_left_column']->value||$_smarty_tpl->tpl_vars['hide_right_column']->value)&&($_smarty_tpl->tpl_vars['hide_left_column']->value!='true'||$_smarty_tpl->tpl_vars['hide_right_column']->value!='true')) {?>     
	<?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(3, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['nbItemsPerLineTablet'] = new Smarty_variable(2, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['nbItemsPerLineMobile'] = new Smarty_variable(2, null, 0);?>
<?php } elseif (($_smarty_tpl->tpl_vars['hide_left_column']->value&&$_smarty_tpl->tpl_vars['hide_right_column']->value)&&($_smarty_tpl->tpl_vars['hide_left_column']->value=='true'&&$_smarty_tpl->tpl_vars['hide_right_column']->value=='true')) {?> 
	<?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(2, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['nbItemsPerLineTablet'] = new Smarty_variable(3, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['nbItemsPerLineMobile'] = new Smarty_variable(2, null, 0);?>
<?php } else { ?>																											  
	<?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(2, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['nbItemsPerLineTablet'] = new Smarty_variable(1, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['nbItemsPerLineMobile'] = new Smarty_variable(2, null, 0);?>
<?php }?>



<?php $_smarty_tpl->tpl_vars['nbLi'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['view_data']->value), null, 0);?>
<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'nbLines'),$_smarty_tpl);?>

<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLineTablet",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLineTablet'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'nbLinesTablet'),$_smarty_tpl);?>


<section id="homepage-blog" class="block">
    <h4 class='title_block'><a href="<?php echo smartblog::GetSmartBlogLink('smartblog');?>
"><?php echo smartyTranslate(array('s'=>'Our Blog','mod'=>'smartbloghomelatestnews'),$_smarty_tpl);?>
</a></h4>
    <div class="block_content">
        <ul class="row">
          <?php if (isset($_smarty_tpl->tpl_vars['view_data']->value)&&!empty($_smarty_tpl->tpl_vars['view_data']->value)) {?>
              <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['view_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['post']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['post']['total'] = $_smarty_tpl->tpl_vars['post']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['post']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['post']['iteration']++;
?>
                  <?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['post']['total'],'perLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'totModulo'),$_smarty_tpl);?>

                  <?php echo smarty_function_math(array('equation'=>"(total%perLineT)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['post']['total'],'perLineT'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'totModuloTablet'),$_smarty_tpl);?>

                  <?php echo smarty_function_math(array('equation'=>"(total%perLineT)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['post']['total'],'perLineT'=>$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value,'assign'=>'totModuloMobile'),$_smarty_tpl);?>

                  <?php if ($_smarty_tpl->tpl_vars['totModulo']->value==0) {?><?php $_smarty_tpl->tpl_vars['totModulo'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbItemsPerLine']->value, null, 0);?><?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['totModuloTablet']->value==0) {?><?php $_smarty_tpl->tpl_vars['totModuloTablet'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value, null, 0);?><?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['totModuloMobile']->value==0) {?><?php $_smarty_tpl->tpl_vars['totModuloMobile'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value, null, 0);?><?php }?>
                  <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['id_post'] = $_smarty_tpl->tpl_vars['post']->value['id'];?>
                  <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['slug'] = $_smarty_tpl->tpl_vars['post']->value['link_rewrite'];?>
                  <li class="col-xs-12 col-sm-<?php echo 12/$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value;?>
 col-md-<?php echo 12/$_smarty_tpl->tpl_vars['nbItemsPerLine']->value;?>
<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['post']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==0) {?> last-in-line<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['post']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==1) {?> first-in-line<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['post']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['post']['total']-$_smarty_tpl->tpl_vars['totModulo']->value)) {?> last-line<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['post']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value==0) {?> last-item-of-tablet-line<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['post']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value==1) {?> first-item-of-tablet-line<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['post']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value==0) {?> last-item-of-mobile-line<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['post']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value==1) {?> first-item-of-mobile-line<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['post']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['post']['total']-$_smarty_tpl->tpl_vars['totModuloMobile']->value)) {?> last-mobile-line<?php }?>">
                      <div class="blog-image">
                          <a href="<?php echo smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['options']->value);?>
"><img alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
" class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
smartblog/images/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_img'];?>
-home-default.jpg"></a>
                          <div class="blog1">
                            <p class="date-added"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['date_added'],"%d/%m");?>
</p><br />
                            <h5><a class="product-name" href="<?php echo smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['options']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a></h5>
                          </div>
                      </div>
                      <p class="post-descr">
                          <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['short_description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                      </p>
                      <a href="<?php echo smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['options']->value);?>
"  class="btn btn-default btn-sm icon-right"><span><?php echo smartyTranslate(array('s'=>'Read More','mod'=>'smartbloghomelatestnews'),$_smarty_tpl);?>
</span></a>
                  </li>
              <?php } ?>
          <?php }?>
        </ul>
    </div>
</section><?php }} ?>
