<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:35
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/view/form/tax.js" */ ?>
<?php /*%%SmartyHeaderCode:1082482661578378573b5972-39384234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eca89d377098839ebb9192e87b9c60a481a855a0' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/view/form/tax.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1082482661578378573b5972-39384234',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578378573d9250_17570260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578378573d9250_17570260')) {function content_578378573d9250_17570260($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.view.form.Tax', {
    extend: 'Shopware.apps.Config.view.base.Form',
    alias: 'widget.config-form-tax',

    getItems: function() {
        var me = this;
        return [{
            xtype: 'config-base-table',
            store: 'form.Tax',
            columns: me.getColumns()
        },{
            xtype: 'config-tax-detail'
        }];
    },

    getColumns: function() {
        var me = this;
        return [{
            xtype: 'gridcolumn',
            dataIndex: 'name',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tax'/'table'/'name_text','default'=>'Name','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tax'/'table'/'name_text','default'=>'Name','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tax'/'table'/'name_text','default'=>'Name','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            flex: 1
        },{
            xtype: 'numbercolumn',
            dataIndex: 'tax',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tax'/'table'/'tax_text','default'=>'Default tax','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tax'/'table'/'tax_text','default'=>'Default tax','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Default tax<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tax'/'table'/'tax_text','default'=>'Default tax','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            align: 'right',
            flex: 1
        }, me.getActionColumn()];
    }
});
//
<?php }} ?>