<?php /* Smarty version Smarty-3.1.21, created on 2022-04-22 07:16:07
         compiled from "W:\domains\ncode.kc\design\themes\responsive\templates\addons\product_bundles\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10500645262622c076bbb43-74190900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d2ffb809c72e2ac2f8f52a63d2dfdd1c4322865' => 
    array (
      0 => 'W:\\domains\\ncode.kc\\design\\themes\\responsive\\templates\\addons\\product_bundles\\hooks\\index\\scripts.post.tpl',
      1 => 1650600869,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10500645262622c076bbb43-74190900',
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
  'unifunc' => 'content_62622c076d0d83_61626287',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62622c076d0d83_61626287')) {function content_62622c076d0d83_61626287($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_function_set_id')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('buy_together_fill_the_mandatory_fields','buy_together_fill_the_mandatory_fields'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/addons/buy_together/func.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
>
    Tygh.tr('buy_together_fill_the_mandatory_fields', '<?php echo strtr($_smarty_tpl->__("buy_together_fill_the_mandatory_fields"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
<?php echo '</script'; ?>
>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_bundles/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_bundles/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/addons/buy_together/func.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
>
    Tygh.tr('buy_together_fill_the_mandatory_fields', '<?php echo strtr($_smarty_tpl->__("buy_together_fill_the_mandatory_fields"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
<?php echo '</script'; ?>
>
<?php }?><?php }} ?>
