<?php /* Smarty version Smarty-3.1.21, created on 2022-04-22 07:19:53
         compiled from "W:\domains\ncode.kc\design\backend\templates\views\addons\components\manage\manage_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13975642162622ce902ac97-71821294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60f3ce0c927ee6efdaed58e22e839bdc67149525' => 
    array (
      0 => 'W:\\domains\\ncode.kc\\design\\backend\\templates\\views\\addons\\components\\manage\\manage_sidebar.tpl',
      1 => 1643359714,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13975642162622ce902ac97-71821294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category_tree' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62622ce903b260_41633637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62622ce903b260_41633637')) {function content_62622ce903b260_41633637($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'W:/domains/ncode.kc/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('categories'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"addons:manage_sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"addons:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/manage/addon_name_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"addons.manage",'view_type'=>"addons",'allow_new_search'=>false), 0);?>

    <?php if ($_smarty_tpl->tpl_vars['category_tree']->value) {?>
        <div class="sidebar-row">
            <h6><?php echo $_smarty_tpl->__("categories");?>
</h6>
            <div class="nested-tree">
                <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/addon_categories_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_all'=>false,'categories_tree'=>$_smarty_tpl->tpl_vars['category_tree']->value,'direction'=>"right"), 0);?>

            </div>
        </div>
    <?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/manage/addons_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"addons.manage"), 0);?>



<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"addons:manage_sidebar_marketplace")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"addons:manage_sidebar_marketplace"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"addons:manage_sidebar_marketplace"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"addons:manage_sidebar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
