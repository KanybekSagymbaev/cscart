<?php /* Smarty version Smarty-3.1.21, created on 2022-04-22 07:14:39
         compiled from "W:\domains\ncode.kc\design\backend\templates\buttons\save.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17540685762622bafe5c500-03031285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '613342c421549fe503b0561af0b885025a988b13' => 
    array (
      0 => 'W:\\domains\\ncode.kc\\design\\backend\\templates\\buttons\\save.tpl',
      1 => 1643359714,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17540685762622bafe5c500-03031285',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_role' => 0,
    'but_name' => 0,
    'but_meta' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62622bafe613b7_74439745',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62622bafe613b7_74439745')) {function content_62622bafe613b7_74439745($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('save'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("save"),'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'allow_href'=>true), 0);?>
<?php }} ?>
