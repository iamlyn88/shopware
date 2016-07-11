<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:44:19
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/category/model/product_assignment.js" */ ?>
<?php /*%%SmartyHeaderCode:1867290779578378832927c6-99181231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ef2d76f57b89c967ff1a1c885605d1f55463238' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/category/model/product_assignment.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1867290779578378832927c6-99181231',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578378832a7b26_05216886',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578378832a7b26_05216886')) {function content_578378832a7b26_05216886($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Category.model.ProductAssignment', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',
    /**
     * Configure the data communication
     * @object
     */
    fields:[
		//
        { name: 'articleId', type: 'integer' },
        { name: 'name', type: 'string' },
        { name: 'number', type: 'string' },
        { name: 'supplierName', type: 'string' }
    ]
});
//
<?php }} ?>