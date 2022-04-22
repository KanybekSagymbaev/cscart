<?php /* Smarty version Smarty-3.1.21, created on 2022-04-22 07:15:56
         compiled from "W:\domains\ncode.kc\design\themes\responsive\templates\blocks\products\products_scroller.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149198504462622bfce94234-39881902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db0ae0a0b81a8404da8e3b111ace8b66bf034184' => 
    array (
      0 => 'W:\\domains\\ncode.kc\\design\\themes\\responsive\\templates\\blocks\\products\\products_scroller.tpl',
      1 => 1650519473,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '149198504462622bfce94234-39881902',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'block' => 0,
    'items' => 0,
    'item_quantity' => 0,
    'obj_prefix' => 0,
    'item_quantity_desktop' => 0,
    'item_quantity_desktop_small' => 0,
    'item_quantity_tablet' => 0,
    'item_quantity_mobile' => 0,
    'product' => 0,
    'object_img' => 0,
    'quick_nav_ids' => 0,
    '_show_add_to_cart' => 0,
    '_hide_price' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62622bfd00a325_32044565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62622bfd00a325_32044565')) {function content_62622bfd00a325_32044565($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\function.include_ext.php';
if (!is_callable('smarty_block_hook')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view']=="Y"&&$_smarty_tpl->tpl_vars['block']->value['properties']['enable_quick_view']=="Y") {?>
    <?php $_smarty_tpl->tpl_vars['quick_nav_ids'] = new Smarty_variable(fn_fields_from_multi_level($_smarty_tpl->tpl_vars['items']->value,"product_id","product_id"), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button']=="Y") {?>
        <?php $_smarty_tpl->tpl_vars['_show_add_to_cart'] = new Smarty_variable(false, null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['_show_add_to_cart'] = new Smarty_variable(true, null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['show_price']=="Y") {?>
        <?php $_smarty_tpl->tpl_vars['_hide_price'] = new Smarty_variable(false, null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['_hide_price'] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['show_old_price'] = new Smarty_variable(true, null, 0);?>

<?php $_smarty_tpl->tpl_vars['obj_prefix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000", null, 0);?>
<?php ob_start();
echo htmlspecialchars(uniqid(), ENT_QUOTES, 'UTF-8');
$_tmp20=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('block', null, 0);
$_smarty_tpl->tpl_vars['block']->value['block_id'] = ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".$_tmp20;?>
<?php $_smarty_tpl->tpl_vars['item_quantity'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'])===null||$tmp==='' ? 5 : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['item_quantity_desktop'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value, null, 0);?>
<?php $_smarty_tpl->tpl_vars['item_quantity_mobile'] = new Smarty_variable(1, null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['item_quantity']->value>3) {?>
    <?php $_smarty_tpl->tpl_vars['item_quantity_desktop_small'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value-1, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['item_quantity_tablet'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value-2, null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['item_quantity']->value===1) {?>
    <?php $_smarty_tpl->tpl_vars['item_quantity_desktop_small'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['item_quantity_tablet'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['item_quantity_desktop_small'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value-1, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['item_quantity_tablet'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value-1, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation']=="Y") {?>
    <div class="owl-theme ty-owl-controls">
        <div class="owl-controls clickable owl-controls-outside"  id="owl_outside_nav_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="owl-buttons">
                <div id="owl_prev_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-prev"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-left-open-thin"),$_smarty_tpl);?>
</div>
                <div id="owl_next_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-next"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-right-open-thin"),$_smarty_tpl);?>
</div>
            </div>
        </div>
    </div>
<?php }?>

<div id="scroll_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="owl-carousel ty-scroller-list ty-scroller"
    data-ca-scroller-item="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-desktop="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity_desktop']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-desktop-small="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity_desktop_small']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-tablet="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity_tablet']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-mobile="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity_mobile']->value, ENT_QUOTES, 'UTF-8');?>
"
>
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_scroller_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_scroller_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="ty-scroller-list__item ty-scroller__item">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_scroller_list_item")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_scroller_list_item"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_smarty_tpl->tpl_vars['obj_id'] = new Smarty_variable("scr_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
            <div class="ty-scroller-list__img-block">
                <?php $_smarty_tpl->tpl_vars["object_img"] = new Smarty_variable($_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'],'no_ids'=>true,'lazy_load'=>true), 0));?>

                <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['object_img']->value;?>
</a>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view']=="Y"&&$_smarty_tpl->tpl_vars['block']->value['properties']['enable_quick_view']=="Y") {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('quick_nav_ids'=>$_smarty_tpl->tpl_vars['quick_nav_ids']->value), 0);?>

                <?php }?>
            </div>
            <div class="ty-scroller-list__description">
                <?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/simple_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_name'=>true,'show_price'=>true,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['_show_add_to_cart']->value,'but_role'=>"action",'hide_price'=>$_smarty_tpl->tpl_vars['_hide_price']->value,'hide_qty'=>true,'show_product_labels'=>true,'show_discount_label'=>true,'show_shipping_label'=>true), 0);?>

            </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_scroller_list_item"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_scroller_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php } ?>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prev_selector'=>"#owl_prev_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'next_selector'=>"#owl_next_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)), 0);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/products/products_scroller.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/products/products_scroller.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view']=="Y"&&$_smarty_tpl->tpl_vars['block']->value['properties']['enable_quick_view']=="Y") {?>
    <?php $_smarty_tpl->tpl_vars['quick_nav_ids'] = new Smarty_variable(fn_fields_from_multi_level($_smarty_tpl->tpl_vars['items']->value,"product_id","product_id"), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button']=="Y") {?>
        <?php $_smarty_tpl->tpl_vars['_show_add_to_cart'] = new Smarty_variable(false, null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['_show_add_to_cart'] = new Smarty_variable(true, null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['show_price']=="Y") {?>
        <?php $_smarty_tpl->tpl_vars['_hide_price'] = new Smarty_variable(false, null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['_hide_price'] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['show_old_price'] = new Smarty_variable(true, null, 0);?>

<?php $_smarty_tpl->tpl_vars['obj_prefix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000", null, 0);?>
<?php ob_start();
echo htmlspecialchars(uniqid(), ENT_QUOTES, 'UTF-8');
$_tmp21=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('block', null, 0);
$_smarty_tpl->tpl_vars['block']->value['block_id'] = ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".$_tmp21;?>
<?php $_smarty_tpl->tpl_vars['item_quantity'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'])===null||$tmp==='' ? 5 : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['item_quantity_desktop'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value, null, 0);?>
<?php $_smarty_tpl->tpl_vars['item_quantity_mobile'] = new Smarty_variable(1, null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['item_quantity']->value>3) {?>
    <?php $_smarty_tpl->tpl_vars['item_quantity_desktop_small'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value-1, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['item_quantity_tablet'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value-2, null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['item_quantity']->value===1) {?>
    <?php $_smarty_tpl->tpl_vars['item_quantity_desktop_small'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['item_quantity_tablet'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['item_quantity_desktop_small'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value-1, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['item_quantity_tablet'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value-1, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation']=="Y") {?>
    <div class="owl-theme ty-owl-controls">
        <div class="owl-controls clickable owl-controls-outside"  id="owl_outside_nav_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="owl-buttons">
                <div id="owl_prev_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-prev"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-left-open-thin"),$_smarty_tpl);?>
</div>
                <div id="owl_next_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-next"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-right-open-thin"),$_smarty_tpl);?>
</div>
            </div>
        </div>
    </div>
<?php }?>

<div id="scroll_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="owl-carousel ty-scroller-list ty-scroller"
    data-ca-scroller-item="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-desktop="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity_desktop']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-desktop-small="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity_desktop_small']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-tablet="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity_tablet']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-mobile="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity_mobile']->value, ENT_QUOTES, 'UTF-8');?>
"
>
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_scroller_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_scroller_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="ty-scroller-list__item ty-scroller__item">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_scroller_list_item")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_scroller_list_item"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_smarty_tpl->tpl_vars['obj_id'] = new Smarty_variable("scr_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
            <div class="ty-scroller-list__img-block">
                <?php $_smarty_tpl->tpl_vars["object_img"] = new Smarty_variable($_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'],'no_ids'=>true,'lazy_load'=>true), 0));?>

                <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['object_img']->value;?>
</a>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view']=="Y"&&$_smarty_tpl->tpl_vars['block']->value['properties']['enable_quick_view']=="Y") {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('quick_nav_ids'=>$_smarty_tpl->tpl_vars['quick_nav_ids']->value), 0);?>

                <?php }?>
            </div>
            <div class="ty-scroller-list__description">
                <?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/simple_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_name'=>true,'show_price'=>true,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['_show_add_to_cart']->value,'but_role'=>"action",'hide_price'=>$_smarty_tpl->tpl_vars['_hide_price']->value,'hide_qty'=>true,'show_product_labels'=>true,'show_discount_label'=>true,'show_shipping_label'=>true), 0);?>

            </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_scroller_list_item"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_scroller_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php } ?>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prev_selector'=>"#owl_prev_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'next_selector'=>"#owl_next_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)), 0);?>


<?php }?><?php }} ?>
