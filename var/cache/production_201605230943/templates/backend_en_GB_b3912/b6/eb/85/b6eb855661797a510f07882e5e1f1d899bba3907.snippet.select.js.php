<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:09
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/base/component/element/select.js" */ ?>
<?php /*%%SmartyHeaderCode:4676265635783783d32d9a9-77946197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6eb855661797a510f07882e5e1f1d899bba3907' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/base/component/element/select.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4676265635783783d32d9a9-77946197',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5783783d3504b3_10736579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5783783d3504b3_10736579')) {function content_5783783d3504b3_10736579($_smarty_tpl) {?>/**
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
 * @package    Base
 * @subpackage Component
 * @version    $Id$
 * @author shopware AG
 */
Ext.define('Shopware.apps.Base.view.element.Select', {
    extend:'Ext.form.field.ComboBox',
    alias:[
        'widget.base-element-select',
        'widget.base-element-combo',
        'widget.base-element-combobox',
        'widget.base-element-comboremote'
    ],

    queryMode:'local',
    forceSelection: false,
    editable: true,
    valueField: 'id',
    displayField: 'name',

    initComponent:function () {
        var me = this;

        if (me.controller && me.action) {
            //me.value = parseInt(me.value);
            me.store = new Ext.data.Store({
                url:'<?php echo '/backend';?>/' + me.controller + '/' + me.action,
                autoLoad:true,
                reader:new Ext.data.JsonReader({
                    root:me.root || 'data',
                    totalProperty:me.count || 'total',
                    fields:me.fields
                })
            });
            // Remove value field for reasons of compatibility
            me.valueField = me.displayField;
        }
        // Eval the store string if it contains a statement.
        if (typeof(me.store) == 'string' && me.store.indexOf('new ') !== -1) {
            //me.value = parseInt(me.value);
            eval('me.store = ' + me.store + ';');
            // Remove value field for reasons of compatibility
            me.valueField = me.displayField;
        }

        me.callParent(arguments);
    },

    setValue:function (value) {
        var me = this;

        if (value !== null && !me.store.loading && me.store.getCount() == 0) {
            me.store.load({
                callback:function () {
                    if(me.store.getCount() > 0) {
                        me.setValue(value);
                    } else {
                        me.setValue(null);
                    }
                }
            });
            return;
        }

        me.callParent(arguments);
    }
});
<?php }} ?>