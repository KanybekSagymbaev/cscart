<?php /* Smarty version Smarty-3.1.21, created on 2022-04-22 07:14:43
         compiled from "W:\domains\ncode.kc\design\backend\templates\addons\help_center\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16984064462622bb39e5da0-93205050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bbf0c660f9b16f0c31a5ea5cb75862131559d65' => 
    array (
      0 => 'W:\\domains\\ncode.kc\\design\\backend\\templates\\addons\\help_center\\hooks\\index\\scripts.post.tpl',
      1 => 1643359714,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16984064462622bb39e5da0-93205050',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'help_center_server_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62622bb3a18c25_43281530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62622bb3a18c25_43281530')) {function content_62622bb3a18c25_43281530($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\block.inline_script.php';
if (!is_callable('smarty_function_script')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('all','help_center.see_all_n_results'));
?>
<?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="admin") {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
        (function (_, $) {
            $.extend(_, {
                help_center_server_url: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['help_center_server_url']->value, ENT_QUOTES, 'UTF-8');?>
',
            });

            _.tr({
                all: '<?php echo strtr($_smarty_tpl->__("all"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                see_all_n_results: '<?php echo strtr($_smarty_tpl->__("help_center.see_all_n_results"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
            });
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/help_center/func.js"),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
