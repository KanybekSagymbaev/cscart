<?php /* Smarty version Smarty-3.1.21, created on 2022-04-22 07:14:40
         compiled from "W:\domains\ncode.kc\design\backend\templates\addons\help_center\hooks\index\toolbar.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53714717062622bb0ec8029-96475100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6886d085a4358ff551f0ec6080e52d0e39cdb94d' => 
    array (
      0 => 'W:\\domains\\ncode.kc\\design\\backend\\templates\\addons\\help_center\\hooks\\index\\toolbar.post.tpl',
      1 => 1643359714,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '53714717062622bb0ec8029-96475100',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62622bb0ee1416_57741104',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62622bb0ee1416_57741104')) {function content_62622bb0ee1416_57741104($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\function.include_ext.php';
?><?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="admin") {?>
    <div class="help-center__toolbar help-center__toolbar--hidden">
        <a class="btn help-center__show-help-center" href="#">
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-question-sign help-center__show-help-center--icon"),$_smarty_tpl);?>

        </a>
    </div>
<?php }?>
<?php }} ?>
