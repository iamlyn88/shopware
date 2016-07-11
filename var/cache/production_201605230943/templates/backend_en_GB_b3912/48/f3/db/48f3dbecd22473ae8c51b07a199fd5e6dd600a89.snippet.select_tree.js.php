<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:29
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/view/element/select_tree.js" */ ?>
<?php /*%%SmartyHeaderCode:93970812757837851a2c1b8-85995114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48f3dbecd22473ae8c51b07a199fd5e6dd600a89' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/view/element/select_tree.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93970812757837851a2c1b8-85995114',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57837851a3f764_08625700',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57837851a3f764_08625700')) {function content_57837851a3f764_08625700($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.view.element.SelectTree', {
    extend: 'Shopware.form.field.ComboTree',
    alias: [
        'widget.config-element-selecttree',
        'widget.config-element-combotree'
    ],

    queryMode: 'local',
    forceSelection: false,
    editable: true,
    valueField: 'id',
    displayField: 'name',

    initComponent:function () {
        var me = this;

        if(me.store) {
            me.store = Ext.data.StoreManager.lookup(me.store)
        }

        me.callParent(arguments);
    },

    /**
     * Load node from remote, if not exits
     *
     * @param value
     */
    setValue:function (value) {
        var me = this,
            store = me.store;

        if (value && !store.loading
          && (!store.getCount() || !store.getNodeById(me.value))) {
            store.load({
                filters: [{
                    property: 'id',
                    value: value
                }]
            });
        }

        me.callParent(arguments);
    },

    /**
     * Remove the remote filter after loading the node
     *
     * @param store
     */
    expand: function() {
        var me = this, hasPicker = !!me.picker;
        me.callParent(arguments);
        if(hasPicker) {
            me.store.load();
        }
    }
});
<?php }} ?>