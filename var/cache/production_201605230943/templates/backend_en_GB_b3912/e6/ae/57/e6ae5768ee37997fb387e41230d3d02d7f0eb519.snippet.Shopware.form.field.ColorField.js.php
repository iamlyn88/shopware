<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:08
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/base/component/Shopware.form.field.ColorField.js" */ ?>
<?php /*%%SmartyHeaderCode:19701415095783783cf3cca9-57932676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6ae5768ee37997fb387e41230d3d02d7f0eb519' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/base/component/Shopware.form.field.ColorField.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19701415095783783cf3cca9-57932676',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5783783d033b96_86769276',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5783783d033b96_86769276')) {function content_5783783d033b96_86769276($_smarty_tpl) {?>/**
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


//

//

Ext.define('Shopware.form.field.ColorField', {
    extend: 'Ext.form.FieldContainer',
    alias: 'widget.shopware-color-picker',

    /**
     * Important: In order for child items to be correctly sized and positioned, typically a layout manager must be
     * specified through the layout configuration option.
     * The sizing and positioning of child items is the responsibility of the Container's layout manager which
     * creates and manages the type of layout you have in mind. For example:
     * If the layout configuration is not explicitly specified for a general purpose container (e.g. Container or Panel)
     * the default layout manager will be used which does nothing but render child components sequentially into the
     * Container (no sizing or positioning will be performed in this situation).
     *
     * @type { Object }
     */
    layout: {
        type: 'hbox',
        align: 'stretch'
    },

    pickerButton: true,

    editable: true,

    initComponent: function () {
        var me = this;

        me.items = me.createItems();

        if (me.value) {
            me.inputField.setValue(me.value);
            me.valueChanged(me.value);
        }

        //listen to change event to change the color field background.
        me.inputField.on('change', function(field, newValue) {
            me.valueChanged(newValue);
        });

        me.callParent(arguments);
    },

    createItems: function() {
        var me = this, items = [];

        me.inputField = me.createInputField();
        me.colorField = me.createColorField();

        items.push(me.inputField);
        items.push(me.colorField);

        if (me.pickerButton == true) {
            me.pickerButton = me.createPickerButton();
            items.push(me.pickerButton);
        }

        return items;
    },

    createPickerButton: function() {
        var me = this;

        return Ext.create('Ext.button.Button', {
            iconCls: 'sprite-color--pencil',
            handler: function() {
                me.colorWindow = Ext.create('Shopware.color.Window', {
                    modal: true,
                    value: me.getValue()
                }).show();

                me.colorWindow.on('apply-color', function(win, value) {
                    win.destroy();
                    me.setValue(value);
                });
            }
        });
    },

    createInputField: function () {
        var me = this;

        return Ext.create('Ext.form.field.Text', {
            name: me.name,
            flex: 1,
            readOnly: !me.editable
        });
    },

    createColorField: function () {
        return Ext.create('Ext.form.field.Text', {
            width: 30,
            readOnly: true
        });
    },

    getValue: function () {
        return this.inputField.getValue();
    },

    setValue: function (value) {
        var color = '#fff';
        if (value) {
            color = value;
        }
        this.valueChanged(color);

        return this.inputField.setValue(value)
    },

    getSubmitData: function () {
        return this.inputField.getSubmitData();
    },

    valueChanged: function(value) {
        this.colorField.setFieldStyle('background: ' + value);
    },

    validate: function() {
        return this.inputField.validate();
    },

    getName: function() {
        return this.inputField.getName();
    }

});

//

<?php }} ?>