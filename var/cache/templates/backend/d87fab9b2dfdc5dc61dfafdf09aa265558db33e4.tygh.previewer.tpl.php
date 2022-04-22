<?php /* Smarty version Smarty-3.1.21, created on 2022-04-22 07:14:37
         compiled from "W:\domains\ncode.kc\design\backend\templates\common\previewer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70574006962622bad99fb91-42233625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd87fab9b2dfdc5dc61dfafdf09aa265558db33e4' => 
    array (
      0 => 'W:\\domains\\ncode.kc\\design\\backend\\templates\\common\\previewer.tpl',
      1 => 1643359714,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '70574006962622bad99fb91-42233625',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62622bad9a43a0_09716946',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62622bad9a43a0_09716946')) {function content_62622bad9a43a0_09716946($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>
<?php }} ?>
