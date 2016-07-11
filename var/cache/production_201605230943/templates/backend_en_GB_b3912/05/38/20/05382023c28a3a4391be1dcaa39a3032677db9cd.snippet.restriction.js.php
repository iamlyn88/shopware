<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:44:19
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/category/view/category/tabs/restriction.js" */ ?>
<?php /*%%SmartyHeaderCode:194834813057837883756610-12049696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05382023c28a3a4391be1dcaa39a3032677db9cd' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/category/view/category/tabs/restriction.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194834813057837883756610-12049696',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57837883790c86_69346253',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57837883790c86_69346253')) {function content_57837883790c86_69346253($_smarty_tpl) {?>/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 *
 * @category   Shopware
 * @package    Category
 * @subpackage Settings
 * @version    $Id$
 * @author shopware AG
 */

/*  */

/**
 * Shopware UI - Category Restriction
 *
 * Used to restrict a Category temporary used to restrict a category by customerGroups
 */
//
Ext.define('Shopware.apps.Category.view.category.tabs.restriction', {
   /**
    * Parent Element Ext.container.Container
    * @string
    */
    extend:'Ext.form.Panel',
    /**
     * Register the alias for this class.
     * @string
     */
    alias:'widget.category-category-tabs-restriction',

    cls: 'shopware-form',

    /**
     * Specifies the border for this component. The border can be a single numeric
     * value to apply to all sides or it can be a CSS style specification for each
     * style, for example: '10 5 3 10'.
     *
     * Default: 0
     * @integer
     */
    border: 0,
    /**
     * Display the the contents of this tab immediately
     * @boolean
     */
    autoShow : true,
    /**
     * enable auto scroll
     * @boolean
     */
    autoScroll: true,
    /**
     * used layout column
     *
     * @string
     */
    layout: 'fit',
    /**
     * Body padding
     * @integer
     */
    bodyPadding: 10,
    /**
     * selected customergroups record
     */
    record: null,

    /**
     * Translations
     * @object
     */
    snippets: {
        availableCustomerGroups:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_block_category_available_customer_groups','default'=>'Available customer groups','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_block_category_available_customer_groups','default'=>'Available customer groups','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Available customer groups<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_block_category_available_customer_groups','default'=>'Available customer groups','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        chosenCustomerGroups:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_block_category_chosen_customer_groups','default'=>'Block category for','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_block_category_chosen_customer_groups','default'=>'Block category for','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Block category for<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_block_category_chosen_customer_groups','default'=>'Block category for','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * Initialize the Shopware.apps.Category.view.category.tabs.restriction and defines the necessary
     * default configuration
     */
    initComponent:function ()
    {
        var me = this;
        me.items = me.getItems();

        me.callParent(arguments);
    },

    /**
     * creates all fields for the tab
     */
    getItems:function () {
        var me = this;

        me.ddSelector = Ext.create('Shopware.DragAndDropSelector',{
            fromTitle: me.snippets.availableCustomerGroups,
            toTitle: me.snippets.chosenCustomerGroups,
            fromStore: me.customerGroupsStore,
            buttons:[ 'add', 'remove' ],
            selectedItems: me.record.getCustomerGroups(),
            buttonsText:{
                add:"<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'restriction'/'button_add','default'=>'Add','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'restriction'/'button_add','default'=>'Add','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'restriction'/'button_add','default'=>'Add','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
                remove:"<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'restriction'/'button_remove','default'=>'Remove','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'restriction'/'button_remove','default'=>'Remove','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'restriction'/'button_remove','default'=>'Remove','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"
            }
        });
        return [me.ddSelector];
    }
});
//
<?php }} ?>