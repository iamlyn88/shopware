<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:29
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/view/element/boolean.js" */ ?>
<?php /*%%SmartyHeaderCode:7905153505783785185efb3-67865611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3411d253f23e570340a38622b6d7e614794d854' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/view/element/boolean.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7905153505783785185efb3-67865611',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5783785186c801_42964292',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5783785186c801_42964292')) {function content_5783785186c801_42964292($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.view.element.Boolean', {
    extend: 'Ext.form.field.Checkbox',
    alias: [
        'widget.config-element-boolean',
        'widget.config-element-checkbox'
    ],
    inputValue: 1,
    uncheckedValue: 0,

    initComponent: function () {
        var me = this;

        if(me.value) {
            me.setValue(!!me.value);
        }

        // Move support text to box label
        if(me.supportText) {
            me.boxLabel = me.supportText;
            delete me.supportText;
        } else if(me.helpText) {
            me.boxLabel = me.helpText;
            delete me.helpText;
        }

        me.callParent(arguments);
    }
});
<?php }} ?>