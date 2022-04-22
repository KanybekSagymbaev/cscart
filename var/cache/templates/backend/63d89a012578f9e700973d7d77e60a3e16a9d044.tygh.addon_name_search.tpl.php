<?php /* Smarty version Smarty-3.1.21, created on 2022-04-22 07:19:53
         compiled from "W:\domains\ncode.kc\design\backend\templates\views\addons\components\manage\addon_name_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173164464762622ce9176ec2-06288594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63d89a012578f9e700973d7d77e60a3e16a9d044' => 
    array (
      0 => 'W:\\domains\\ncode.kc\\design\\backend\\templates\\views\\addons\\components\\manage\\addon_name_search.tpl',
      1 => 1643359714,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '173164464762622ce9176ec2-06288594',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_meta' => 0,
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62622ce9182fd6_31303273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62622ce9182fd6_31303273')) {function content_62622ce9182fd6_31303273($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search','remove','addons.search_description'));
?>
<div class="sidebar-row addons-addon-name-search">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="addons_search_form" method="get" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
 form--no-margin">
        <div class="controls">
            <input type="text"
                name="q"
                id="elm_addon"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
"
                autofocus
                class="input-full input--no-margin"
                placeholder="<?php echo $_smarty_tpl->__("search");?>
"
            />
            <button type="button" class="hidden addons-addon-name-search__remove" id="elm_addon_clear" title="<?php echo $_smarty_tpl->__("remove");?>
">
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon icon-remove"),$_smarty_tpl);?>

            </button>
        </div>
    </form>
    <div class="muted description">
        <?php echo $_smarty_tpl->__("addons.search_description");?>

    </div>
</div>
<?php }} ?>
