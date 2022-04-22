<?php /* Smarty version Smarty-3.1.21, created on 2022-04-22 07:16:01
         compiled from "W:\domains\ncode.kc\design\themes\responsive\templates\addons\product_variations\hooks\products\add_to_cart.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88635305062622c0107db87-19072444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a89b2648bd11cd7188606977f30f05e51b76727d' => 
    array (
      0 => 'W:\\domains\\ncode.kc\\design\\themes\\responsive\\templates\\addons\\product_variations\\hooks\\products\\add_to_cart.override.tpl',
      1 => 1650600869,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '88635305062622c0107db87-19072444',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_select_variations_button' => 0,
    'details_page' => 0,
    'product' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'opt_but_role' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62622c010a5443_77656702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62622c010a5443_77656702')) {function content_62622c010a5443_77656702($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.select_variation','product_variations.select_variation'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['show_select_variations_button'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_select_variations_button']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['details_page']->value&&$_smarty_tpl->tpl_vars['product']->value['has_child_variations']&&$_smarty_tpl->tpl_vars['show_select_variations_button']->value) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:add_to_cart")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:add_to_cart"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php ob_start();
echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');
$_tmp30=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_cart_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'but_text'=>$_smarty_tpl->__("product_variations.select_variation"),'but_name'=>'','but_href'=>$_tmp30,'but_role'=>$_smarty_tpl->tpl_vars['opt_but_role']->value,'but_meta'=>"ty-btn__primary ty-btn__big"), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:add_to_cart"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/products/add_to_cart.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/products/add_to_cart.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['show_select_variations_button'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_select_variations_button']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['details_page']->value&&$_smarty_tpl->tpl_vars['product']->value['has_child_variations']&&$_smarty_tpl->tpl_vars['show_select_variations_button']->value) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:add_to_cart")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:add_to_cart"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php ob_start();
echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');
$_tmp31=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_cart_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'but_text'=>$_smarty_tpl->__("product_variations.select_variation"),'but_name'=>'','but_href'=>$_tmp31,'but_role'=>$_smarty_tpl->tpl_vars['opt_but_role']->value,'but_meta'=>"ty-btn__primary ty-btn__big"), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:add_to_cart"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }?><?php }} ?>
