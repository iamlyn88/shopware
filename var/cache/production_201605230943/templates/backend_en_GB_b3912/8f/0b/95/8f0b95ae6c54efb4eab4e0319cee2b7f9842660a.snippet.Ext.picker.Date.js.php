<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:06
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/engine/Library/ExtJs/overrides/Ext.picker.Date.js" */ ?>
<?php /*%%SmartyHeaderCode:10224780245783783aab0200-12328990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f0b95ae6c54efb4eab4e0319cee2b7f9842660a' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/engine/Library/ExtJs/overrides/Ext.picker.Date.js',
      1 => 1463971428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10224780245783783aab0200-12328990',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5783783aab7002_05693019',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5783783aab7002_05693019')) {function content_5783783aab7002_05693019($_smarty_tpl) {?>/**
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
Ext.override(Ext.picker.Date, {

    /**
     * Overrides the todayBtn to use our
     * fancy and shiny button kit.
     *
     * @private
     * @return void
     */
    beforeRender: function () {
        var me = this;
        me.callOverridden();
        if(me.todayBtn) {
            me.todayBtn.addCls('small').addCls('secondary');
        }
    }
});
<?php }} ?>