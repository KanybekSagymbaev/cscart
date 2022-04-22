<?php /* Smarty version Smarty-3.1.21, created on 2022-04-22 07:14:43
         compiled from "W:\domains\ncode.kc\design\backend\templates\addons\advanced_import\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50474687962622bb3de6c28-64302535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e42e0cd9b1897af9c809b8cce7f0343d3248aaeb' => 
    array (
      0 => 'W:\\domains\\ncode.kc\\design\\backend\\templates\\addons\\advanced_import\\hooks\\index\\scripts.post.tpl',
      1 => 1643359714,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '50474687962622bb3de6c28-64302535',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62622bb3e18ef5_53466228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62622bb3e18ef5_53466228')) {function content_62622bb3e18ef5_53466228($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_block_inline_script')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('advanced_import.cant_save_preset_invalid_modifiers','file_editor'));
?>
<?php echo smarty_function_script(array('src'=>"js/addons/advanced_import/func.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/advanced_import/read_more.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    (function(_, $) {
        _.tr({
            "advanced_import.cant_save_preset_invalid_modifiers":
                "<?php echo strtr($_smarty_tpl->__("advanced_import.cant_save_preset_invalid_modifiers"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
            "file_editor": "<?php echo strtr($_smarty_tpl->__("file_editor"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
