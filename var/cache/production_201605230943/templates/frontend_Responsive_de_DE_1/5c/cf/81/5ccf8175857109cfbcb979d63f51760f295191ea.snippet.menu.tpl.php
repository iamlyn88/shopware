<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:46:15
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Frontend/Bare/widgets/index/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1986101021578378f7f349f8-44905186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ccf8175857109cfbcb979d63f51760f295191ea' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Frontend/Bare/widgets/index/menu.tpl',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1986101021578378f7f349f8-44905186',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sGroup' => 0,
    'sMenu' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578378f805c4a0_24386354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578378f805c4a0_24386354')) {function content_578378f805c4a0_24386354($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sMenu']->value[$_smarty_tpl->tpl_vars['sGroup']->value]){?>
    <ul class="service--list is--rounded" role="menu">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sMenu']->value[$_smarty_tpl->tpl_vars['sGroup']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <li class="service--entry" role="menuitem">
                <a class="service--link" href="<?php if ($_smarty_tpl->tpl_vars['item']->value['link']){?><?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
<?php }else{ ?><?php echo htmlspecialchars(Enlight_Application::Instance()->Front()->Router()->assemble(array('controller' => 'custom', 'sCustom' => $_smarty_tpl->tpl_vars['item']->value['id'], 'title' => $_smarty_tpl->tpl_vars['item']->value['description'], ))); ?><?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['description'], ENT_QUOTES, 'utf-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['target']){?>target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"<?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>

                </a>
            </li>
        <?php } ?>
    </ul>
<?php }?><?php }} ?>