<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:06
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/engine/Library/ExtJs/overrides/Ext.MessageBox.js" */ ?>
<?php /*%%SmartyHeaderCode:15802602625783783aa8c916-08207419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b761a9119baead117957d80d1064a0b7082f7c38' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/engine/Library/ExtJs/overrides/Ext.MessageBox.js',
      1 => 1463971428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15802602625783783aa8c916-08207419',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5783783aa95c62_31645098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5783783aa95c62_31645098')) {function content_5783783aa95c62_31645098($_smarty_tpl) {?>/**
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
Ext.override(Ext.MessageBox, {
    afterRender: function() {
        var me = this,
            toolbar = me.dockedItems.getAt(1);

        toolbar.addCls('shopware-toolbar');
        toolbar.setUI('shopware-ui');

        Ext.each(me.msgButtons, function(button) {
            if(button.itemId === 'ok' || button.itemId === 'yes') {
                button.addCls('primary')

            } else {
                button.addCls('secondary');
            }
        });

        me.callOverridden(arguments);
    }
})
<?php }} ?>