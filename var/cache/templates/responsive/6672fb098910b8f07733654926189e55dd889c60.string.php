<?php /* Smarty version Smarty-3.1.21, created on 2022-04-22 07:16:06
         compiled from "6672fb098910b8f07733654926189e55dd889c60" */ ?>
<?php /*%%SmartyHeaderCode:54754477862622c0607a9c7-40890770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6672fb098910b8f07733654926189e55dd889c60' => 
    array (
      0 => '6672fb098910b8f07733654926189e55dd889c60',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '54754477862622c0607a9c7-40890770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62622c060834f9_37830694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62622c060834f9_37830694')) {function content_62622c060834f9_37830694($_smarty_tpl) {?>
                                    <ul id="customer_service_links">
                                    <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("orders.search"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">Ваши заказы</a></li>
                                    <?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']&&$_smarty_tpl->tpl_vars['addons']->value['wishlist']['status']=='A') {?>
                                        <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">Отложенные</a></li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products']=='Y') {?>
                                        <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">Список сравнения</a></li>
                                    <?php }?>
                                    </ul><?php }} ?>
