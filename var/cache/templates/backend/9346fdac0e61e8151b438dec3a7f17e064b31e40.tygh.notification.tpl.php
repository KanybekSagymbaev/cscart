<?php /* Smarty version Smarty-3.1.21, created on 2022-04-22 07:14:36
         compiled from "W:\domains\ncode.kc\design\backend\templates\common\notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14065368862622bacdc2601-93073796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9346fdac0e61e8151b438dec3a7f17e064b31e40' => 
    array (
      0 => 'W:\\domains\\ncode.kc\\design\\backend\\templates\\common\\notification.tpl',
      1 => 1643359714,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14065368862622bacdc2601-93073796',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'key' => 0,
    'view_mode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62622bace0c524_28378047',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62622bace0c524_28378047')) {function content_62622bace0c524_28378047($_smarty_tpl) {?><?php if (!defined("AJAX_REQUEST")) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array("notification_content", null, null); ob_start(); ?>
<?php  $_smarty_tpl->tpl_vars["message"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["message"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = fn_get_notifications(''); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["message"]->key => $_smarty_tpl->tpl_vars["message"]->value) {
$_smarty_tpl->tpl_vars["message"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["message"]->key;
if ($_smarty_tpl->tpl_vars['message']->value['type']=="I") {?><div class="cm-notification-content cm-notification-content-extended notification-content-extended <?php if ($_smarty_tpl->tpl_vars['message']->value['message_state']=="I") {?> cm-auto-hide<?php }?>" data-ca-notification-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"><h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['title'], ENT_QUOTES, 'UTF-8');?>
<span class="cm-notification-close close <?php if ($_smarty_tpl->tpl_vars['message']->value['message_state']=="S") {?> cm-notification-close-ajax<?php }?>"></span></h1><div class="notification-body-extended"><?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>
</div></div><?php } else { ?><div class="alert cm-notification-content<?php if ($_smarty_tpl->tpl_vars['message']->value['type']=="N") {?> alert-success<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type']=="W") {?> alert-warning<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type']=="E") {?> alert-error<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type']=="S") {?> alert-info<?php }?> <?php if ($_smarty_tpl->tpl_vars['message']->value['message_state']=="I") {?> cm-auto-hide<?php }?>" id="notification_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-notification-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"><button type="button" class="close cm-notification-close<?php if ($_smarty_tpl->tpl_vars['message']->value['message_state']=="S") {?> cm-notification-close-ajax<?php }?>" <?php if ($_smarty_tpl->tpl_vars['message']->value['message_state']!="S") {?>data-dismiss="alert"<?php }?>>&times;</button><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['title'], ENT_QUOTES, 'UTF-8');?>
</strong><?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>
</div><?php }
} ?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value=="simple") {?>
    <?php echo Smarty::$_smarty_vars['capture']['notification_content'];?>

<?php }?>

<div class="cm-notification-container alert-wrap <?php if ($_smarty_tpl->tpl_vars['view_mode']->value=="simple") {?>notification-container-top<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['view_mode']->value!="simple") {?>
        <?php echo Smarty::$_smarty_vars['capture']['notification_content'];?>

    <?php }?>
</div>

<?php }?>
<?php }} ?>
