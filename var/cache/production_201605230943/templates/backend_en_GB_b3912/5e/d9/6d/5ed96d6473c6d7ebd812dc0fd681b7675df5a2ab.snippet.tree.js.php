<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:44:19
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/category/store/tree.js" */ ?>
<?php /*%%SmartyHeaderCode:1518870240578378837a44d2-23722145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ed96d6473c6d7ebd812dc0fd681b7675df5a2ab' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/category/store/tree.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1518870240578378837a44d2-23722145',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578378837b6e36_89535123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578378837b6e36_89535123')) {function content_578378837b6e36_89535123($_smarty_tpl) {?>/**
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
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - for the Category backend module.
 *
 * The tree store loads and stores the tree data
 */
//
Ext.define('Shopware.apps.Category.store.Tree', {
    /**
     * Define that this component is an extension of the Ext.data.TreeStore
     */
    extend : 'Ext.data.TreeStore',

    /**
     * Define the used model for this store
     * @string
     */
    model : 'Shopware.apps.Category.model.Tree'
});
//
<?php }} ?>