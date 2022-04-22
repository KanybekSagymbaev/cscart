<?php /* Smarty version Smarty-3.1.21, created on 2022-04-22 07:14:34
         compiled from "W:\domains\ncode.kc\design\backend\templates\addons\help_center\hooks\index\styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198546643462622baa9dc0e2-90435642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f3bfa5a46b2aa578ac071102d02a960c66f2e00' => 
    array (
      0 => 'W:\\domains\\ncode.kc\\design\\backend\\templates\\addons\\help_center\\hooks\\index\\styles.post.tpl',
      1 => 1643359714,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '198546643462622baa9dc0e2-90435642',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62622baa9f39f0_23063936',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62622baa9f39f0_23063936')) {function content_62622baa9f39f0_23063936($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\function.style.php';
?><?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="admin") {?>
    <?php echo smarty_function_style(array('src'=>"addons/help_center/styles.less"),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
