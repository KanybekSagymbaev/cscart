<?php /* Smarty version Smarty-3.1.21, created on 2022-04-21 08:38:28
         compiled from "W:\domains\ncode.kc\design\backend\templates\common\comet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14522046466260edd4b7d455-43686557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '215678fcbfadfe22c0467fff954464f6e2d12c4d' => 
    array (
      0 => 'W:\\domains\\ncode.kc\\design\\backend\\templates\\common\\comet.tpl',
      1 => 1643359714,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14522046466260edd4b7d455-43686557',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6260edd4b969e1_66454690',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6260edd4b969e1_66454690')) {function content_6260edd4b969e1_66454690($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('processing'));
?>
<a id="comet_container_controller" data-backdrop="static" data-keyboard="false" href="#comet_control" data-toggle="modal" class="hide"></a>

<div class="modal hide fade" id="comet_control" tabindex="-1" role="dialog" aria-labelledby="comet_title" aria-hidden="true">
    <div class="modal-header">
        <h3 id="comet_title"><?php echo $_smarty_tpl->__("processing");?>
</h3>
    </div>
    <div class="modal-body">
        <p></p>
        <div class="progress progress-striped active">
            
            <div class="bar" style="width: 0%;"></div>
        </div>
    </div>
</div><?php }} ?>
