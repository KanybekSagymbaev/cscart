<?php /* Smarty version Smarty-3.1.21, created on 2022-04-22 07:14:55
         compiled from "W:\domains\ncode.kc\design\backend\templates\views\block_manager\components\device_switch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63754999362622bbf597205-54199352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cadc74cdf88f539dbfac3a141ee938c6ca3a43a' => 
    array (
      0 => 'W:\\domains\\ncode.kc\\design\\backend\\templates\\views\\block_manager\\components\\device_switch.tpl',
      1 => 1643359714,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '63754999362622bbf597205-54199352',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'devices' => 0,
    'device' => 0,
    'device_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62622bbf5af0b3_10189331',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62622bbf5af0b3_10189331')) {function content_62622bbf5af0b3_10189331($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('block_manager.view_layout.phone','block_manager.view_layout.tablet','block_manager.view_layout.desktop','block_manager.view_layout.reset_filter'));
?>
<?php ob_start();
echo $_smarty_tpl->__("block_manager.view_layout.phone");
$_tmp4=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("block_manager.view_layout.tablet");
$_tmp5=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("block_manager.view_layout.desktop");
$_tmp6=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['devices'] = new Smarty_variable(array(''=>array("name"=>$_smarty_tpl->__("block_manager.view_layout.reset_filter"),"icon_class"=>'',"btn_class"=>"btn btn-primary cm-reset-device-availability"),"phone"=>array("name"=>"<span class=\"mobile-hidden\">".$_tmp4."</span>","icon_class"=>"icon-mobile-phone","btn_class"=>"btn cm-switch-device-availability"),"tablet"=>array("name"=>"<span class=\"mobile-hidden\">".$_tmp5."</span>","icon_class"=>"icon-tablet","btn_class"=>"btn cm-switch-device-availability"),"desktop"=>array("name"=>"<span class=\"mobile-hidden\">".$_tmp6."</span>","icon_class"=>"icon-desktop","btn_class"=>"btn cm-switch-device-availability")), null, 0);?>

<div class="device-switch-wrap" id="device_switch">
    <div class="btn-group device-switch">
        <?php  $_smarty_tpl->tpl_vars['device'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['device']->_loop = false;
 $_smarty_tpl->tpl_vars['device_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['devices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['device']->key => $_smarty_tpl->tpl_vars['device']->value) {
$_smarty_tpl->tpl_vars['device']->_loop = true;
 $_smarty_tpl->tpl_vars['device_id']->value = $_smarty_tpl->tpl_vars['device']->key;
?>
            <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'text'=>$_smarty_tpl->tpl_vars['device']->value['name'],'icon'=>$_smarty_tpl->tpl_vars['device']->value['icon_class'],'icon_first'=>true,'raw'=>true,'class'=>"device-switch__device ".((string)$_smarty_tpl->tpl_vars['device']->value['btn_class']),'data'=>array("data-ca-device-availability-device"=>$_smarty_tpl->tpl_vars['device_id']->value)));?>

        <?php } ?>
    </div>
<!--device_switch--></div>
<?php }} ?>
