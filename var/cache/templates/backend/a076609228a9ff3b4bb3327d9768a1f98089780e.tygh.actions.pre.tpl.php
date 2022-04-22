<?php /* Smarty version Smarty-3.1.21, created on 2022-04-22 07:14:40
         compiled from "W:\domains\ncode.kc\design\backend\templates\addons\product_reviews\hooks\index\actions.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134066328262622bb0770248-15139102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a076609228a9ff3b4bb3327d9768a1f98089780e' => 
    array (
      0 => 'W:\\domains\\ncode.kc\\design\\backend\\templates\\addons\\product_reviews\\hooks\\index\\actions.pre.tpl',
      1 => 1643359714,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '134066328262622bb0770248-15139102',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62622bb0794a89_06598236',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62622bb0794a89_06598236')) {function content_62622bb0794a89_06598236($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\modifier.enum.php';
?>


<?php if (fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['runtime']->value['controller']==='reviews'&&($_smarty_tpl->tpl_vars['runtime']->value['mode']==='manage'&&$_smarty_tpl->tpl_vars['addons']->value['product_reviews']['split_reviews_by_storefronts']!==smarty_modifier_enum("YesNo::YES")||$_smarty_tpl->tpl_vars['runtime']->value['mode']==='update')) {?>
    <?php $_smarty_tpl->tpl_vars['select_storefront'] = new Smarty_variable(false, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['select_storefront'] = clone $_smarty_tpl->tpl_vars['select_storefront'];?>
<?php }?>
<?php }} ?>
