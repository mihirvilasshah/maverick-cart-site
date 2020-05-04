<?php /* Smarty version Smarty-3.1.19, created on 2020-04-26 16:41:04
         compiled from "/home/maveric9/public_html/themes/theme1151/modules/tmhtmlcontent/views/templates/hook/top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5972048595ea56c48c864b7-54127564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5b87a12e8579c7ece6737262f78f793b8dfc4b7' => 
    array (
      0 => '/home/maveric9/public_html/themes/theme1151/modules/tmhtmlcontent/views/templates/hook/top.tpl',
      1 => 1587899301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5972048595ea56c48c864b7-54127564',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'htmlitems' => 0,
    'hook' => 0,
    'hookName' => 0,
    'hItem' => 0,
    'module_dir' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ea56c48c9aed1_26341595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea56c48c9aed1_26341595')) {function content_5ea56c48c9aed1_26341595($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['htmlitems']->value)&&$_smarty_tpl->tpl_vars['htmlitems']->value) {?>
<?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['hookName'] = new Smarty_variable($_tmp1, null, 0);?>
<div id="tmhtmlcontent_<?php echo $_smarty_tpl->tpl_vars['hookName']->value;?>
">
	<ul class="tmhtmlcontent-<?php echo $_smarty_tpl->tpl_vars['hookName']->value;?>
 clearfix row">
		<?php  $_smarty_tpl->tpl_vars['hItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['htmlitems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['hItem']->key => $_smarty_tpl->tpl_vars['hItem']->value) {
$_smarty_tpl->tpl_vars['hItem']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['iteration']++;
?>
            <li class="tmhtmlcontent-item-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['items']['iteration'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 col-xs-4">
                <?php if ($_smarty_tpl->tpl_vars['hItem']->value['url']) {?>
                    <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['url'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="item-link"<?php if ($_smarty_tpl->tpl_vars['hItem']->value['target']==1) {?> onclick="return !window.open(this.href);"<?php }?> title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['hItem']->value['image']) {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."img/".((string)$_smarty_tpl->tpl_vars['hItem']->value['image']));?>
" class="item-img img-responsive" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" width="<?php if ($_smarty_tpl->tpl_vars['hItem']->value['image_w']) {?><?php echo intval($_smarty_tpl->tpl_vars['hItem']->value['image_w']);?>
<?php } else { ?>100%<?php }?>" height="<?php if ($_smarty_tpl->tpl_vars['hItem']->value['image_h']) {?><?php echo intval($_smarty_tpl->tpl_vars['hItem']->value['image_h']);?>
<?php } else { ?>100%<?php }?>"/>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['hItem']->value['title']&&$_smarty_tpl->tpl_vars['hItem']->value['title_use']==1) {?>
                        <h3 class="item-title"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h3>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['hItem']->value['html']) {?>
                        <div class="item-html">
                            <?php echo $_smarty_tpl->tpl_vars['hItem']->value['html'];?>

                        </div>
                    <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['hItem']->value['url']) {?>
                    </a>
                <?php }?>
            </li>
		<?php } ?>
	</ul>
</div>
<?php }?>
<?php }} ?>
