<?php /* Smarty version Smarty-3.1.21, created on 2022-04-21 08:38:21
         compiled from "W:\domains\ncode.kc\design\backend\templates\buttons\helpers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4079436776260edcdd49050-95924418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b748eb90acf676c98024f6db558e4df5c9aedd4' => 
    array (
      0 => 'W:\\domains\\ncode.kc\\design\\backend\\templates\\buttons\\helpers.tpl',
      1 => 1643359714,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4079436776260edcdd49050-95924418',
  'function' => 
  array (
    'btn' => 
    array (
      'parameter' => 
      array (
        'text' => '',
        'href' => '',
        'title' => '',
        'onclick' => '',
        'target' => '',
        'class' => '',
        'data' => 
        array (
        ),
        'form' => '',
        'method' => '',
        'raw' => false,
      ),
      'compiled' => '',
    ),
    'dropdown' => 
    array (
      'parameter' => 
      array (
        'text' => '',
        'title' => '',
        'class' => '',
        'content' => '',
        'icon' => '',
        'no_caret' => false,
        'placement' => 'left',
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'method' => 0,
    'href' => 0,
    'dispatch' => 0,
    'type' => 0,
    'class' => 0,
    'target' => 0,
    'id' => 0,
    'title' => 0,
    'data' => 0,
    'data_value' => 0,
    'data_name' => 0,
    'onclick' => 0,
    'icon' => 0,
    'icon_first' => 0,
    'raw' => 0,
    'text' => 0,
    'process' => 0,
    'form' => 0,
    'click' => 0,
    'target_id' => 0,
    'tag_level' => 0,
    'only_delete' => 0,
    'hide_add' => 0,
    'on_add' => 0,
    'item_id' => 0,
    'hide_clone' => 0,
    'content' => 0,
    'placement' => 0,
    'no_caret' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6260edce0763d3_28170306',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6260edce0763d3_28170306')) {function content_6260edce0763d3_28170306($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('delete_selected','delete','tools'));
?>

<?php if (!is_callable('smarty_function_include_ext')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\function.include_ext.php';
if (!is_callable('smarty_function_script')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\function.script.php';
?><?php if (!function_exists('smarty_template_function_btn')) {
    function smarty_template_function_btn($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['btn']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php $_smarty_tpl->tpl_vars['method'] = new Smarty_variable(mb_strtoupper($_smarty_tpl->tpl_vars['method']->value, 'UTF-8'), null, 0);?>

    <?php ob_start();?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['method']->value)===null||$tmp==='' ? "GET" : $tmp), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['method']->value)===null||$tmp==='' ? "POST" : $tmp), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp4=ob_get_clean();?><?php if (fn_check_view_permissions($_smarty_tpl->tpl_vars['href']->value,$_tmp3)&&fn_check_view_permissions($_smarty_tpl->tpl_vars['dispatch']->value,$_tmp4)) {?>
    
    <?php if ($_smarty_tpl->tpl_vars['type']->value==="text"||$_smarty_tpl->tpl_vars['type']->value==="button") {?>
        <?php if ($_smarty_tpl->tpl_vars['href']->value&&$_smarty_tpl->tpl_vars['method']->value=="POST") {?>
            <?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("cm-post ".((string)$_smarty_tpl->tpl_vars['class']->value), null, 0);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['type']->value==="button") {?>
            <button type="button"
        <?php } else { ?>
            <a
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['target']->value) {?>target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['href']->value) {?>href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['class']->value) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
            <?php  $_smarty_tpl->tpl_vars['data_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data_value']->_loop = false;
 $_smarty_tpl->tpl_vars['data_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data_value']->key => $_smarty_tpl->tpl_vars['data_value']->value) {
$_smarty_tpl->tpl_vars['data_value']->_loop = true;
 $_smarty_tpl->tpl_vars['data_name']->value = $_smarty_tpl->tpl_vars['data_value']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['data_value']->value) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_value']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php }?>
            <?php } ?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['onclick']->value) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['onclick']->value;?>
; return false;"<?php }?>
        >
        <?php if ($_smarty_tpl->tpl_vars['icon']->value&&$_smarty_tpl->tpl_vars['icon_first']->value) {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['icon']->value),$_smarty_tpl);
}?>
            <?php if ($_smarty_tpl->tpl_vars['raw']->value==false) {?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

            <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['icon']->value&&!$_smarty_tpl->tpl_vars['icon_first']->value) {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['icon']->value),$_smarty_tpl);
}?>

        <?php if ($_smarty_tpl->tpl_vars['type']->value==="button") {?>
            </button>
        <?php } else { ?>
            </a>
        <?php }?>
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['type']->value=="list") {?>
        <?php if (!$_smarty_tpl->tpl_vars['href']->value&&!$_smarty_tpl->tpl_vars['process']->value) {?>
            <?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("cm-process-items cm-submit ".((string)$_smarty_tpl->tpl_vars['class']->value), null, 0);?>
        <?php }?>
        <?php $_smarty_tpl->createLocalArrayVariable('data', null, 0);
$_smarty_tpl->tpl_vars['data']->value['data-ca-target-form'] = $_smarty_tpl->tpl_vars['form']->value;?>
        <?php $_smarty_tpl->createLocalArrayVariable('data', null, 0);
$_smarty_tpl->tpl_vars['data']->value['data-ca-dispatch'] = $_smarty_tpl->tpl_vars['dispatch']->value;?>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'target'=>$_smarty_tpl->tpl_vars['target']->value,'href'=>$_smarty_tpl->tpl_vars['href']->value,'data'=>$_smarty_tpl->tpl_vars['data']->value,'class'=>$_smarty_tpl->tpl_vars['class']->value,'onclick'=>$_smarty_tpl->tpl_vars['onclick']->value,'text'=>$_smarty_tpl->tpl_vars['text']->value,'method'=>$_smarty_tpl->tpl_vars['method']->value,'raw'=>$_smarty_tpl->tpl_vars['raw']->value,'icon'=>''));?>

    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['type']->value=="delete_selected") {?>
        <?php if ($_smarty_tpl->tpl_vars['icon']->value) {?>
            <?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("btn ".((string)$_smarty_tpl->tpl_vars['class']->value), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['text'] = new Smarty_variable(" ", null, 0);?>
        <?php }?>
        <?php $_smarty_tpl->createLocalArrayVariable('data', null, 0);
$_smarty_tpl->tpl_vars['data']->value['data-ca-target-form'] = $_smarty_tpl->tpl_vars['form']->value;?>
        <?php $_smarty_tpl->createLocalArrayVariable('data', null, 0);
$_smarty_tpl->tpl_vars['data']->value['data-ca-dispatch'] = $_smarty_tpl->tpl_vars['dispatch']->value;?>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'target'=>$_smarty_tpl->tpl_vars['target']->value,'href'=>$_smarty_tpl->tpl_vars['href']->value,'data'=>$_smarty_tpl->tpl_vars['data']->value,'class'=>"cm-process-items cm-submit cm-confirm ".((string)$_smarty_tpl->tpl_vars['class']->value),'click'=>$_smarty_tpl->tpl_vars['click']->value,'text'=>(($tmp = @$_smarty_tpl->tpl_vars['text']->value)===null||$tmp==='' ? $_smarty_tpl->__("delete_selected") : $tmp),'method'=>$_smarty_tpl->tpl_vars['method']->value));?>

    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['type']->value=="delete") {?>
        <?php $_smarty_tpl->createLocalArrayVariable('data', null, 0);
$_smarty_tpl->tpl_vars['data']->value['data-ca-target-form'] = $_smarty_tpl->tpl_vars['form']->value;?>
        <?php $_smarty_tpl->createLocalArrayVariable('data', null, 0);
$_smarty_tpl->tpl_vars['data']->value['data-ca-dispatch'] = $_smarty_tpl->tpl_vars['dispatch']->value;?>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'target'=>$_smarty_tpl->tpl_vars['target']->value,'href'=>$_smarty_tpl->tpl_vars['href']->value,'data'=>$_smarty_tpl->tpl_vars['data']->value,'class'=>((string)$_smarty_tpl->tpl_vars['class']->value),'click'=>$_smarty_tpl->tpl_vars['click']->value,'text'=>(($tmp = @$_smarty_tpl->tpl_vars['text']->value)===null||$tmp==='' ? $_smarty_tpl->__("delete") : $tmp),'method'=>$_smarty_tpl->tpl_vars['method']->value));?>

    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['type']->value=="dialog") {?>
        <?php $_smarty_tpl->createLocalArrayVariable('data', null, 0);
$_smarty_tpl->tpl_vars['data']->value['data-ca-target-form'] = $_smarty_tpl->tpl_vars['form']->value;?>
        <?php $_smarty_tpl->createLocalArrayVariable('data', null, 0);
$_smarty_tpl->tpl_vars['data']->value['data-ca-target-id'] = $_smarty_tpl->tpl_vars['target_id']->value;?>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'text'=>$_smarty_tpl->tpl_vars['text']->value,'class'=>"cm-dialog-opener ".((string)$_smarty_tpl->tpl_vars['class']->value),'href'=>$_smarty_tpl->tpl_vars['href']->value,'id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value,'data'=>$_smarty_tpl->tpl_vars['data']->value,'method'=>$_smarty_tpl->tpl_vars['method']->value));?>

    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['type']->value=="multiple") {?>
        <?php echo smarty_function_script(array('src'=>"js/tygh/node_cloning.js"),$_smarty_tpl);?>


        <?php $_smarty_tpl->tpl_vars["tag_level"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['tag_level']->value)===null||$tmp==='' ? "1" : $tmp), null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['only_delete']->value!="Y") {
if (!$_smarty_tpl->tpl_vars['hide_add']->value) {?><li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'onclick'=>"Tygh."."$"."('#box_' + this.id).cloneNode(".((string)$_smarty_tpl->tpl_vars['tag_level']->value)."); ".((string)$_smarty_tpl->tpl_vars['on_add']->value),'id'=>$_smarty_tpl->tpl_vars['item_id']->value,'method'=>$_smarty_tpl->tpl_vars['method']->value));?>
</li><?php }
if (!$_smarty_tpl->tpl_vars['hide_clone']->value) {?><li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'onclick'=>"Tygh."."$"."('#box_' + this.id).cloneNode(".((string)$_smarty_tpl->tpl_vars['tag_level']->value).", true);",'id'=>$_smarty_tpl->tpl_vars['item_id']->value,'method'=>$_smarty_tpl->tpl_vars['method']->value));?>
</li><?php }
}?><li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'only_delete'=>$_smarty_tpl->tpl_vars['only_delete']->value,'class'=>"cm-delete-row",'method'=>$_smarty_tpl->tpl_vars['method']->value));?>
</li>
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['type']->value=="add") {?>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'title'=>$_smarty_tpl->tpl_vars['title']->value,'class'=>"cm-tooltip btn",'icon'=>"icon-plus",'href'=>$_smarty_tpl->tpl_vars['href']->value,'method'=>$_smarty_tpl->tpl_vars['method']->value));?>

    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['type']->value=="text_add") {?>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'text'=>$_smarty_tpl->tpl_vars['text']->value,'class'=>"btn btn-primary ".((string)$_smarty_tpl->tpl_vars['class']->value),'icon'=>"icon-plus icon-white",'icon_first'=>true,'href'=>$_smarty_tpl->tpl_vars['href']->value,'method'=>$_smarty_tpl->tpl_vars['method']->value));?>

    <?php }?>

    <?php }?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>



<?php if (!is_callable('smarty_modifier_replace')) include 'W:\domains\ncode.kc\app\lib\vendor\smarty\smarty\libs\plugins\modifier.replace.php';
if (!is_callable('smarty_function_include_ext')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\function.include_ext.php';
?><?php if (!function_exists('smarty_template_function_dropdown')) {
    function smarty_template_function_dropdown($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['dropdown']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php if (trim(smarty_modifier_replace(strip_tags($_smarty_tpl->tpl_vars['content']->value),"&nbsp;",''))!='') {?>
        <div class="btn-group<?php if ($_smarty_tpl->tpl_vars['placement']->value=="left") {?> dropleft<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
            <a href="#" class="btn dropdown-toggle" data-toggle="dropdown" <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                <?php $_smarty_tpl->tpl_vars['icon'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['icon']->value)===null||$tmp==='' ? "icon-cog dropdown-icon--tools" : $tmp), null, 0);?>
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"dropdown-icon ".((string)$_smarty_tpl->tpl_vars['icon']->value)),$_smarty_tpl);?>

                <?php if ($_smarty_tpl->tpl_vars['text']->value) {?>
                    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['text']->value)===null||$tmp==='' ? $_smarty_tpl->__("tools") : $tmp);?>

                <?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['no_caret']->value) {?>
                    <span class="caret"></span>
                <?php }?>
            </a>
            <ul class="dropdown-menu">
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            </ul>
        </div>
    <?php }?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

<?php }} ?>