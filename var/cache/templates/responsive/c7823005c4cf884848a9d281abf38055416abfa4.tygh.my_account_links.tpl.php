<?php /* Smarty version Smarty-3.1.21, created on 2022-04-22 07:16:05
         compiled from "W:\domains\ncode.kc\design\themes\responsive\templates\blocks\static_templates\my_account_links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129833751262622c05ad3b16-71941916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7823005c4cf884848a9d281abf38055416abfa4' => 
    array (
      0 => 'W:\\domains\\ncode.kc\\design\\themes\\responsive\\templates\\blocks\\static_templates\\my_account_links.tpl',
      1 => 1650519473,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '129833751262622c05ad3b16-71941916',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62622c05af7494_21574314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62622c05af7494_21574314')) {function content_62622c05af7494_21574314($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('orders','profile_details','sign_in','create_account','orders','profile_details','sign_in','create_account'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><ul id="account_info_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
">
<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("orders.search"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("orders");?>
</a></li>
    <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("profile_details");?>
</a></li>
<?php } else { ?>
    <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("auth.login_form"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("sign_in");?>
</a></li>
    <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("create_account");?>
</a></li>
<?php }?>
<!--account_info_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
--></ul><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/my_account_links.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/my_account_links.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><ul id="account_info_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
">
<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("orders.search"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("orders");?>
</a></li>
    <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("profile_details");?>
</a></li>
<?php } else { ?>
    <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("auth.login_form"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("sign_in");?>
</a></li>
    <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("create_account");?>
</a></li>
<?php }?>
<!--account_info_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
--></ul><?php }?><?php }} ?>
