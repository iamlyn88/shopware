<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:35
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/view/customer_group/discount.js" */ ?>
<?php /*%%SmartyHeaderCode:14759620705783785788b9b2-02483135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce7a4ebf0dd0324bf7ee9dce744d07546835002c' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/view/customer_group/discount.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14759620705783785788b9b2-02483135',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578378578b7185_90860360',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578378578b7185_90860360')) {function content_578378578b7185_90860360($_smarty_tpl) {?>/**
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
 */

/**
 * todo@all: Documentation
 */

//

//
Ext.define('Shopware.apps.Config.view.customerGroup.Discount', {
    extend: 'Shopware.apps.Config.view.base.Property',
    alias: 'widget.config-customergroup-discount',

    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'discount'/'title','default'=>'Basket discount','namespace'=>'backend/config/view/customer_group')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'discount'/'title','default'=>'Basket discount','namespace'=>'backend/config/view/customer_group'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shopping cart discount<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'discount'/'title','default'=>'Basket discount','namespace'=>'backend/config/view/customer_group'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    name: 'discounts',

    sortableColumns: false,

	snippets:{
		discount:{
			basketValue: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'discount'/'basket_value','default'=>'Basket value','namespace'=>'backend/config/view/customer_group')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'discount'/'basket_value','default'=>'Basket value','namespace'=>'backend/config/view/customer_group'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shopping cart value<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'discount'/'basket_value','default'=>'Basket value','namespace'=>'backend/config/view/customer_group'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
			basketDiscount: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'discount'/'basket_discount','default'=>'Basket discount','namespace'=>'backend/config/view/customer_group')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'discount'/'basket_discount','default'=>'Basket discount','namespace'=>'backend/config/view/customer_group'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shopping cart discount<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'discount'/'basket_discount','default'=>'Basket discount','namespace'=>'backend/config/view/customer_group'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
		}
	},

    getColumns: function() {
        var me = this;

        return [{
            header: me.snippets.discount.basketValue,
            dataIndex: 'value',
            align: 'right',
            flex: 1,
            xtype: 'numbercolumn',
            editor: {
                xtype: 'config-element-number',
                minValue: 0,
                decimalPrecision: 2
            }
        }, {
            xtype: 'numbercolumn',
            header: me.snippets.discount.basketDiscount,
            dataIndex: 'discount',
            align: 'right',
            flex: 1,
            format: '0,000.00 %',
            editor: {
                xtype: 'config-element-number',
                minValue: 0,
				maxValue: 100,
                decimalPrecision: 2
            }
        }, me.getActionColumn()];
    }
});
//
<?php }} ?>