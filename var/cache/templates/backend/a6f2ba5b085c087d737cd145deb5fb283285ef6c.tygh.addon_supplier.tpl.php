<?php /* Smarty version Smarty-3.1.21, created on 2022-04-22 07:19:52
         compiled from "W:\domains\ncode.kc\design\backend\templates\views\addons\components\addons\addon_supplier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1583473262622ce88b5c63-31154365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6f2ba5b085c087d737cd145deb5fb283285ef6c' => 
    array (
      0 => 'W:\\domains\\ncode.kc\\design\\backend\\templates\\views\\addons\\components\\addons\\addon_supplier.tpl',
      1 => 1643359714,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1583473262622ce88b5c63-31154365',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62622ce88c7089_38228534',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62622ce88c7089_38228534')) {function content_62622ce88c7089_38228534($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('verified_developer','addon_has_admin_review'));
?>
<?php if ($_smarty_tpl->tpl_vars['a']->value['supplier']) {?>
    <div class="addons-addon-supplier">
        <a href="<?php echo htmlspecialchars(fn_url("addons.manage&supplier=".((string)$_smarty_tpl->tpl_vars['a']->value['supplier'])), ENT_QUOTES, 'UTF-8');?>
" class="addons-addon-supplier__name row-status">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['supplier'], ENT_QUOTES, 'UTF-8');?>

        </a>
        <?php if ($_smarty_tpl->tpl_vars['a']->value['identified']||$_smarty_tpl->tpl_vars['a']->value['is_core_addon']) {?>
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-ok addons-addon-supplier__identified addons-addon-supplier__identified--".((string)mb_strtolower($_smarty_tpl->tpl_vars['a']->value['status'], 'UTF-8')),'title'=>$_smarty_tpl->__("verified_developer")),$_smarty_tpl);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['a']->value['personal_review']) {?>
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-comment addons-addon-supplier__has-admin-review",'title'=>$_smarty_tpl->__("addon_has_admin_review")),$_smarty_tpl);?>

        <?php }?>
    </div>
<?php }?>
<?php }} ?>
