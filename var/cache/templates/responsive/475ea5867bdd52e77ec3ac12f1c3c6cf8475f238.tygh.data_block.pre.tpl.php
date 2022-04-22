<?php /* Smarty version Smarty-3.1.21, created on 2022-04-22 07:16:00
         compiled from "W:\domains\ncode.kc\design\themes\responsive\templates\addons\product_reviews\hooks\products\data_block.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175490730762622c00d16281-75476535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '475ea5867bdd52e77ec3ac12f1c3c6cf8475f238' => 
    array (
      0 => 'W:\\domains\\ncode.kc\\design\\themes\\responsive\\templates\\addons\\product_reviews\\hooks\\products\\data_block.pre.tpl',
      1 => 1650600870,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '175490730762622c00d16281-75476535',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_rating' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62622c00d2dfd8_69243377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62622c00d2dfd8_69243377')) {function content_62622c00d2dfd8_69243377($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['show_rating']->value) {?>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rating'=>$_smarty_tpl->tpl_vars['product']->value['average_rating'],'link'=>true,'product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>


<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/hooks/products/data_block.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/hooks/products/data_block.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['show_rating']->value) {?>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rating'=>$_smarty_tpl->tpl_vars['product']->value['average_rating'],'link'=>true,'product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>


<?php }
}?><?php }} ?>
