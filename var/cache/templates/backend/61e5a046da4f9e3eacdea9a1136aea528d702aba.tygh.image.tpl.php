<?php /* Smarty version Smarty-3.1.21, created on 2022-04-21 08:38:26
         compiled from "W:\domains\ncode.kc\design\backend\templates\common\image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8950217256260edd27008d5-90196855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61e5a046da4f9e3eacdea9a1136aea528d702aba' => 
    array (
      0 => 'W:\\domains\\ncode.kc\\design\\backend\\templates\\common\\image.tpl',
      1 => 1643359714,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8950217256260edd27008d5-90196855',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'image' => 0,
    'image_width' => 0,
    'image_height' => 0,
    'show_detailed_link' => 0,
    'image_data' => 0,
    'width' => 0,
    'height' => 0,
    'href' => 0,
    'link_css_class' => 0,
    'image_id' => 0,
    'image_data2x' => 0,
    'image_css_class' => 0,
    'no_image_css_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6260edd2729f50_46888298',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6260edd2729f50_46888298')) {function content_6260edd2729f50_46888298($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('no_image'));
?>
<?php $_smarty_tpl->tpl_vars['image_data'] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['image']->value,$_smarty_tpl->tpl_vars['image_width']->value,$_smarty_tpl->tpl_vars['image_height']->value), null, 0);
$_smarty_tpl->tpl_vars['show_detailed_link'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_detailed_link']->value)===null||$tmp==='' ? true : $tmp), null, 0);
$_smarty_tpl->tpl_vars['width'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_data']->value['width']*2, null, 0);
$_smarty_tpl->tpl_vars['height'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_data']->value['height']*2, null, 0);
$_smarty_tpl->tpl_vars['image_data2x'] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['image']->value,$_smarty_tpl->tpl_vars['width']->value,$_smarty_tpl->tpl_vars['height']->value), null, 0);
if ($_smarty_tpl->tpl_vars['show_detailed_link']->value&&($_smarty_tpl->tpl_vars['image']->value||$_smarty_tpl->tpl_vars['href']->value)) {?><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_css_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['href']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image']->value['image_path'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" <?php if (!$_smarty_tpl->tpl_vars['href']->value) {?>target="_blank"<?php }?>><?php }
if ($_smarty_tpl->tpl_vars['image_data']->value['image_path']) {?><img <?php if ($_smarty_tpl->tpl_vars['image_id']->value) {?>id="image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data2x']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
 2x" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['height'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['alt'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['image_data']->value['generate_image']) {?>    class="spinner <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_css_class']->value, ENT_QUOTES, 'UTF-8');?>
"    data-ca-image-path="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?>    class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_css_class']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['alt'], ENT_QUOTES, 'UTF-8');?>
" /><?php } else { ?><div class="no-image <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_image_css_class']->value, ENT_QUOTES, 'UTF-8');?>
" style="width: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['image_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_height']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
px; height: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['image_height']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_width']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
px;"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"glyph-image",'title'=>$_smarty_tpl->__("no_image")),$_smarty_tpl);?>
</div><?php }
if ($_smarty_tpl->tpl_vars['show_detailed_link']->value&&($_smarty_tpl->tpl_vars['image']->value||$_smarty_tpl->tpl_vars['href']->value)) {?></a><?php }?>
<?php }} ?>