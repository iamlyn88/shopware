<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:29
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/view/main/navigation.js" */ ?>
<?php /*%%SmartyHeaderCode:16540393845783785179e8e2-75976738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '679354b119c13dd1b999cabe2b720dd54253ac52' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/view/main/navigation.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16540393845783785179e8e2-75976738',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578378517bcdb2_29543328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578378517bcdb2_29543328')) {function content_578378517bcdb2_29543328($_smarty_tpl) {?>/**
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
 * @package    Shopware_Config
 * @subpackage Config
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Config.view.main.Navigation', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.config-navigation',

    width: 200,

    autoScroll: true,
    layout: 'fit',

    initComponent: function() {
        var me = this;

        Ext.applyIf(me, {
            //dockedItems: me.getToolbar(),
            items: me.getTree()
        });

        me.callParent(arguments);
    },

    getTree: function() {
        var me = this;
        return {
            xtype: 'treepanel',
            rootVisible: false,
            //flex: 1,
            border: false,
            store: 'main.Navigation',
            dockedItems: me.getSearchToolbar()
        };
    },

    getToolbar: function() {
        var me = this;
        return [{
            xtype: 'toolbar',
            ui: 'shopware-ui',
            dock: 'top',
            border: false,
            items: [ {
                xtype: 'config-element-select',
                name: 'shop',
                flex: 1,
                forceSelection: true,
                store: 'base.Shop'
            }]
        }];
    },

    getSearchToolbar: function() {
        var me = this;
        return [{
            xtype: 'toolbar',
            ui: 'shopware-ui',
            dock: 'top',
            border: false,
            items: me.getTopBar()
        }];
    },

    getTopBar:function () {
        return [ { xtype: 'tbspacer', width: 22 }, {
            xtype:'config-base-search',
            width: 165
        }];
    }
});
//
<?php }} ?>