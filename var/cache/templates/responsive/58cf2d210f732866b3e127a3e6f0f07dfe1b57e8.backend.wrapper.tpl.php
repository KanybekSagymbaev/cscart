<?php /* Smarty version Smarty-3.1.21, created on 2022-04-22 07:15:53
         compiled from "W:\domains\ncode.kc\design\backend\templates\views\block_manager\frontend_render\wrapper.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39491577862622bf90433e0-01385388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58cf2d210f732866b3e127a3e6f0f07dfe1b57e8' => 
    array (
      0 => 'W:\\domains\\ncode.kc\\design\\backend\\templates\\views\\block_manager\\frontend_render\\wrapper.tpl',
      1 => 1643359714,
      2 => 'backend',
    ),
  ),
  'nocache_hash' => '39491577862622bf90433e0-01385388',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'location_data' => 0,
    'content_alignment' => 0,
    'snapping_id' => 0,
    'wrapper' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62622bf9061ff5_24544916',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62622bf9061ff5_24544916')) {function content_62622bf9061ff5_24544916($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="<?php if ($_smarty_tpl->tpl_vars['block']->value['status']==="D") {?>bm-block-manager__block--disabled<?php }?>
    bm-block-manager__block bm-block-manager__block--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_data']->value['dispatch'], ENT_QUOTES, 'UTF-8');?>

    <?php if ($_smarty_tpl->tpl_vars['content_alignment']->value=="RIGHT") {?> ty-float-right
    <?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value=="LEFT") {?> ty-float-left<?php }?>"
    data-ca-block-manager-snapping-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snapping_id']->value, ENT_QUOTES, 'UTF-8');?>
"
>
    <?php echo $_smarty_tpl->getSubTemplate ("backend:views/block_manager/frontend_render/components/block_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="bm-block-manager__block-content clearfix">
        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['wrapper']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:views/block_manager/frontend_render/wrapper.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:views/block_manager/frontend_render/wrapper.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="<?php if ($_smarty_tpl->tpl_vars['block']->value['status']==="D") {?>bm-block-manager__block--disabled<?php }?>
    bm-block-manager__block bm-block-manager__block--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_data']->value['dispatch'], ENT_QUOTES, 'UTF-8');?>

    <?php if ($_smarty_tpl->tpl_vars['content_alignment']->value=="RIGHT") {?> ty-float-right
    <?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value=="LEFT") {?> ty-float-left<?php }?>"
    data-ca-block-manager-snapping-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snapping_id']->value, ENT_QUOTES, 'UTF-8');?>
"
>
    <?php echo $_smarty_tpl->getSubTemplate ("backend:views/block_manager/frontend_render/components/block_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="bm-block-manager__block-content clearfix">
        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['wrapper']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</div><?php }?><?php }} ?>
