<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:44:19
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/category/store/assigned_products.js" */ ?>
<?php /*%%SmartyHeaderCode:5111872257837883819ea4-19013620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4b8d30eb637a2deaf0369135077ba2c6966583d' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/category/store/assigned_products.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5111872257837883819ea4-19013620',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57837883831b04_14870304',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57837883831b04_14870304')) {function content_57837883831b04_14870304($_smarty_tpl) {?>/**
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
 * Shopware Category Module - Assigned products store
 *
 * @category  Shopware
 * @copyright Copyright (c) shopware AG (http://www.shopware.de)
 */
//
Ext.define('Shopware.apps.Category.store.AssignedProducts', {

    /**
     * Extend for the standard ExtJS 4
     * @string
     */
    extend: 'Ext.data.Store',

    /**
     * Truthy to filter on the server side, otherwise falsy to filter on the client side.
     * @boolean
     */
    remoteFilter: true,

    /**
     * Auto load the store after the component
     * is initialized
     * @boolean
     */
    autoLoad : false,

    /**
     * Define the used model for this store
     * @string
     */
    model : 'Shopware.apps.Category.model.ProductAssignment',

    /**
     * Batch size
     * @integer
     */
    pageSize: 20,

    /**
     * Configure the data communication
     * @object
     */
    proxy: {
        type: 'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        url: '<?php echo '/backend/Category/getCategoryArticles';?>',

        /**
         * Configure the data reader
         * @object
         */
        reader: {
            type: 'json',
            root: 'data',
            totalProperty: 'total'
        }
    }
});
//
<?php }} ?>