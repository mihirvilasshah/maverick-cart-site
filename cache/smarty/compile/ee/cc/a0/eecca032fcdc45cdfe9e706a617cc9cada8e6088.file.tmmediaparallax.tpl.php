<?php /* Smarty version Smarty-3.1.19, created on 2020-04-26 17:06:45
         compiled from "/home/maveric9/public_html/themes/theme1151/modules/tmmediaparallax/views/templates/admin/tmmediaparallax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13321378155ea5724da18536-86109984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eecca032fcdc45cdfe9e706a617cc9cada8e6088' => 
    array (
      0 => '/home/maveric9/public_html/themes/theme1151/modules/tmmediaparallax/views/templates/admin/tmmediaparallax.tpl',
      1 => 1587899301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13321378155ea5724da18536-86109984',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parallaxitems' => 0,
    'item' => 0,
    'formAction' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ea5724da2b951_07272776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea5724da2b951_07272776')) {function content_5ea5724da2b951_07272776($_smarty_tpl) {?>
<div id="htmlcontent" class="panel">
    <div class="panel-heading"><?php echo smartyTranslate(array('s'=>'Add new block','mod'=>'tmmediaparallax'),$_smarty_tpl);?>
</div>

    <div class="new-item">
    
        <div class="form-group">
            <button type="button" class="btn btn-default btn-lg button-new-item"><i class="icon-plus-sign"></i> <?php echo smartyTranslate(array('s'=>'Add container','mod'=>'tmmediaparallax'),$_smarty_tpl);?>
</button>
        </div>

        <div class="item-container">
            <form method="post" action="" enctype="multipart/form-data" class="item-form defaultForm form-horizontal">
                <div class="well">
                    <div class="selector item-field form-group">
                        <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Selector','mod'=>'tmmediaparallax'),$_smarty_tpl);?>
</label>
                        <div class="col-lg-7">
                            <input type="text" name="item_selector" value="#header">
                        </div>
                    </div>

                    <div class="type item-field form-group">
                        <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Parallax type','mod'=>'tmmediaparallax'),$_smarty_tpl);?>
</label>
                        <div class="col-lg-7">
                            <div class="switch prestashop-switch fixed-width-lg">   
                                <select class="form-control fixed-width-lg parallax_type" name="item_type" default="image">
                                    <option value="image">image</option>  
                                    <option value="video">video</option>
                                </select>
                            </div>                       
                        </div>
                    </div>

                    <div class="media item-field form-group">
                        <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Media files','mod'=>'tmmediaparallax'),$_smarty_tpl);?>
</label>
                        <div class="col-lg-7">
                            <!-- <input type="text" name="item_filename" value="default" /> -->
                            <input type="file" name="item_filename[]" multiple/>
                            <span><?php echo smartyTranslate(array('s'=>'For video parallax please make sure to upload video in three formats .mp4, .webm and .ogv. Image poster can be .png, .jpg or .gif.','mod'=>'tmmediaparallax'),$_smarty_tpl);?>
</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-7 col-lg-offset-3">
                            <button type="submit" name="newItem" class="button-new-item-save btn btn-success pull-right" onClick="this.form.submit();"><i class="icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save','mod'=>'tmmediaparallax'),$_smarty_tpl);?>
</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['parallaxitems']->value)) {?>
<div id="htmlcontent" class="panel">
    <div class="panel-heading"><?php echo smartyTranslate(array('s'=>'Parallax blocks','mod'=>'tmmediaparallax'),$_smarty_tpl);?>
</div>

    <div class="lang-items">
        <div class="lang-content">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parallaxitems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>                
                <div id="item-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="item well">
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['formAction']->value;?>
" class="item-form defaultForm form-horizontal" name="item_list_form" enctype="multipart/form-data">
                        <input type="hidden" name="item_id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                        <div class="selector item-field form-group">
                            <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Selector','mod'=>'tmmediaparallax'),$_smarty_tpl);?>
</label>
                            <div class="col-lg-7">
                                <input type="text" name="item_selector" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['selector'];?>
" />                               
                            </div>
                        </div>

                        <div class="type item-field form-group">
                            <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Parallax type','mod'=>'tmmediaparallax'),$_smarty_tpl);?>
</label>
                            <div class="col-lg-7">
                                <div class="switch prestashop-switch fixed-width-lg">                                  
                                    <select class="form-control fixed-width-lg parallax_type" name="item_type" default="" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['type'];?>
">
                                        <option value="image"<?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='image') {?> selected="selected"<?php }?>>image</option>  
                                        <option value="video"<?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='video') {?> selected="selected"<?php }?>>video</option>
                                    </select>                                    
                                </div>                       
                            </div>
                        </div>

                        <div class="media item-field form-group">
                            <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Media files','mod'=>'tmmediaparallax'),$_smarty_tpl);?>
</label>
                            <div class="col-lg-7">
                                <!-- <input type="text" name="item_filename" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['filename'];?>
" /> -->
                                <span><?php echo $_smarty_tpl->tpl_vars['item']->value['filename'];?>
</span>
                                <input type="file" name="item_filename[]" multiple />
                                <span><?php echo smartyTranslate(array('s'=>'For video parallax please make sure to upload video in three formats .mp4, .webm and .ogv. Image poster can be .png, .jpg or .gif.','mod'=>'tmmediaparallax'),$_smarty_tpl);?>
</span>
                            </div>
                        </div>

                        <div class="form-group item_controls">
                            <div class="col-lg-7 col-lg-offset-3">                                                  
                                <button type="submit" name="updateItem" class="button-new-item-save btn btn-success" onClick="this.form.submit();"><i class="icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save','mod'=>'tmmediaparallax'),$_smarty_tpl);?>
</button>

                                <button type="submit" name="removeItem" class="button-new-item-save btn btn-danger" onClick="this.form.submit();"><i class="icon-save"></i> <?php echo smartyTranslate(array('s'=>'Delete','mod'=>'tmmediaparallax'),$_smarty_tpl);?>
</button>
                            </div>
                        </div>
                    </form>
                </div>  
            <?php } ?>
        </div>
    </div>
</div>
<?php }?>


<style>
    .item-container{
        display: none;
    }
    .item_controls button{
        float: right;
        margin-left: 4px;
    }

}
</style>

<script>
    jQuery(document).ready(function() {

        //show new item panel
        $('.button-new-item').on('click', function() {
            $('.new-item').find('.item-container').slideToggle();
        });         
    });  
    
</script><?php }} ?>
