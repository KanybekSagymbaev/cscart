<?php /* Smarty version Smarty-3.1.21, created on 2022-04-22 07:14:34
         compiled from "W:\domains\ncode.kc\design\backend\templates\addons\store_locator\hooks\index\styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142910037862622baac529d9-98888094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c01307a7ceec1b238482d0f94d8fe15759aa0be' => 
    array (
      0 => 'W:\\domains\\ncode.kc\\design\\backend\\templates\\addons\\store_locator\\hooks\\index\\styles.post.tpl',
      1 => 1643359714,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '142910037862622baac529d9-98888094',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'store_locator_shipping' => 0,
    'shipping' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62622baac6ba31_49626805',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62622baac6ba31_49626805')) {function content_62622baac6ba31_49626805($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\function.style.php';
?><?php if ($_smarty_tpl->tpl_vars['store_locator_shipping']->value&&$_smarty_tpl->tpl_vars['shipping']->value['company_id']==0) {?>
    <?php echo smarty_function_style(array('src'=>"addons/store_locator/styles.less"),$_smarty_tpl);?>

<?php }?><?php }} ?>
