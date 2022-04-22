<?php /* Smarty version Smarty-3.1.21, created on 2022-04-22 07:15:48
         compiled from "W:\domains\ncode.kc\design\themes\responsive\templates\addons\product_reviews\hooks\index\styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42953334862622bf42f9879-80406615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8948631d75bf7f51b204fb95d47c6d21a199cf2b' => 
    array (
      0 => 'W:\\domains\\ncode.kc\\design\\themes\\responsive\\templates\\addons\\product_reviews\\hooks\\index\\styles.post.tpl',
      1 => 1650600870,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '42953334862622bf42f9879-80406615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62622bf430e398_60252312',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62622bf430e398_60252312')) {function content_62622bf430e398_60252312($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\function.style.php';
if (!is_callable('smarty_function_set_id')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php echo smarty_function_style(array('src'=>"addons/product_reviews/main.less"),$_smarty_tpl);?>



<?php echo smarty_function_style(array('src'=>"addons/product_reviews/fallback.css"),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<?php echo smarty_function_style(array('src'=>"addons/product_reviews/main.less"),$_smarty_tpl);?>



<?php echo smarty_function_style(array('src'=>"addons/product_reviews/fallback.css"),$_smarty_tpl);?>

<?php }?><?php }} ?>
