<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:46:00
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Frontend/Bare/frontend/compare/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13458418578378e8ab19f8-71763203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf6020ca230ebe9e6d6a040899d3d1c2ac4ff9b7' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Frontend/Bare/frontend/compare/index.tpl',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13458418578378e8ab19f8-71763203',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sComparisons' => 0,
    'compare' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578378e8b4d8f0_28250845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578378e8b4d8f0_28250845')) {function content_578378e8b4d8f0_28250845($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sComparisons']->value){?>
    
        <i class="icon--compare"></i> <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"CompareInfoCount",'namespace'=>'frontend/compare/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CompareInfoCount",'namespace'=>'frontend/compare/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Compare<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CompareInfoCount",'namespace'=>'frontend/compare/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<span class="compare--quantity">(<?php echo count($_smarty_tpl->tpl_vars['sComparisons']->value);?>
)</span>
    
    
        <ul class="compare--list is--rounded" data-product-compare-menu="true" role="menu">
            <?php  $_smarty_tpl->tpl_vars['compare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['compare']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sComparisons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['compare']->key => $_smarty_tpl->tpl_vars['compare']->value){
$_smarty_tpl->tpl_vars['compare']->_loop = true;
?>
                
                <li class="compare--entry" role="menuitem">
                    
                        <a href="<?php echo htmlspecialchars(Enlight_Application::Instance()->Front()->Router()->assemble(array('controller' => 'detail', 'sArticle' => $_smarty_tpl->tpl_vars['compare']->value['articleId'], ))); ?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['compare']->value['articlename'], ENT_QUOTES, 'utf-8', true);?>
" class="compare--link"><?php echo $_smarty_tpl->tpl_vars['compare']->value['articlename'];?>
</a>
                    

                    
                        <a class="btn btn--item-delete" href="<?php echo htmlspecialchars(Enlight_Application::Instance()->Front()->Router()->assemble(array('controller' => 'compare', 'action' => 'delete_article', 'articleID' => $_smarty_tpl->tpl_vars['compare']->value['articleID'], ))); ?>" rel="nofollow">
                            <i class="icon--cross compare--icon-remove"></i>
                        </a>
                    
                </li>
                
            <?php } ?>
            
                <li>
                    <a href="<?php echo 'http://five.shopware.vn/compare/overlay';?>" data-modal-title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"CompareInfoCount",'namespace'=>'frontend/compare/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CompareInfoCount",'namespace'=>'frontend/compare/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Compare<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CompareInfoCount",'namespace'=>'frontend/compare/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" rel="nofollow" class="btn--compare btn--compare-start btn is--primary is--full is--small is--icon-right">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"CompareActionStart",'namespace'=>'frontend/compare/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CompareActionStart",'namespace'=>'frontend/compare/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Start comparison<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CompareActionStart",'namespace'=>'frontend/compare/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <i class="icon--arrow-right"></i>
                    </a>
                </li>
            
            
                <li>
                    <a href="<?php echo htmlspecialchars(Enlight_Application::Instance()->Front()->Router()->assemble(array('controller' => 'compare', 'action' => 'delete_all', 'forceSecure' => '1', ))); ?>" rel="nofollow" class="btn--compare-delete btn--compare btn is--secondary is--small is--full">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"CompareActionDelete",'namespace'=>'frontend/compare/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CompareActionDelete",'namespace'=>'frontend/compare/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete comparison<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CompareActionDelete",'namespace'=>'frontend/compare/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </a>
                </li>
            
        </ul>
    
<?php }?><?php }} ?>