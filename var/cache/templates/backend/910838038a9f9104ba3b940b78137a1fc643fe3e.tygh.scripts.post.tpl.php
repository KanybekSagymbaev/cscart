<?php /* Smarty version Smarty-3.1.21, created on 2022-04-22 07:14:43
         compiled from "W:\domains\ncode.kc\design\backend\templates\addons\product_bundles\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36167864462622bb3f38db6-53956086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '910838038a9f9104ba3b940b78137a1fc643fe3e' => 
    array (
      0 => 'W:\\domains\\ncode.kc\\design\\backend\\templates\\addons\\product_bundles\\hooks\\index\\scripts.post.tpl',
      1 => 1643359714,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '36167864462622bb3f38db6-53956086',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62622bb4026f39_27207913',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62622bb4026f39_27207913')) {function content_62622bb4026f39_27207913($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('options','any_option_combinations','product_bundles.any_variation'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            options: '<?php echo strtr($_smarty_tpl->__("options"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            any_option_combinations: '<?php echo strtr($_smarty_tpl->__("any_option_combinations"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            product_bundles_any_variation: '<?php echo strtr($_smarty_tpl->__("product_bundles.any_variation"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
