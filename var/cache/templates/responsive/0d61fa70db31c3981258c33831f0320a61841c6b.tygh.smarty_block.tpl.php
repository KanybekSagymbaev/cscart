<?php /* Smarty version Smarty-3.1.21, created on 2022-04-22 07:16:05
         compiled from "W:\domains\ncode.kc\design\themes\responsive\templates\blocks\smarty_block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133412105462622c05966fa2-34026989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d61fa70db31c3981258c33831f0320a61841c6b' => 
    array (
      0 => 'W:\\domains\\ncode.kc\\design\\themes\\responsive\\templates\\blocks\\smarty_block.tpl',
      1 => 1650519473,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '133412105462622c05966fa2-34026989',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'no_wrap' => 0,
    'block' => 0,
    'content' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62622c0598bc87_92765224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62622c0598bc87_92765224')) {function content_62622c0598bc87_92765224($_smarty_tpl) {?><?php if (!is_callable('smarty_function_live_edit')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\function.live_edit.php';
if (!is_callable('smarty_function_eval_string')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\function.eval_string.php';
if (!is_callable('smarty_function_set_id')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!$_smarty_tpl->tpl_vars['no_wrap']->value) {?><div class="ty-wysiwyg-content" <?php echo smarty_function_live_edit(array('name'=>"block:content:".((string)$_smarty_tpl->tpl_vars['block']->value['block_id']),'phrase'=>$_smarty_tpl->tpl_vars['content']->value,'need_render'=>true),$_smarty_tpl);?>
 data-ca-live-editor-object-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['object_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-live-editor-object-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['object_type'], ENT_QUOTES, 'UTF-8');?>
"><?php }
echo smarty_function_eval_string(array('var'=>$_smarty_tpl->tpl_vars['content']->value),$_smarty_tpl);
if (!$_smarty_tpl->tpl_vars['no_wrap']->value) {?></div><?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/smarty_block.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/smarty_block.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!$_smarty_tpl->tpl_vars['no_wrap']->value) {?><div class="ty-wysiwyg-content" <?php echo smarty_function_live_edit(array('name'=>"block:content:".((string)$_smarty_tpl->tpl_vars['block']->value['block_id']),'phrase'=>$_smarty_tpl->tpl_vars['content']->value,'need_render'=>true),$_smarty_tpl);?>
 data-ca-live-editor-object-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['object_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-live-editor-object-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['object_type'], ENT_QUOTES, 'UTF-8');?>
"><?php }
echo smarty_function_eval_string(array('var'=>$_smarty_tpl->tpl_vars['content']->value),$_smarty_tpl);
if (!$_smarty_tpl->tpl_vars['no_wrap']->value) {?></div><?php }
}?><?php }} ?>
