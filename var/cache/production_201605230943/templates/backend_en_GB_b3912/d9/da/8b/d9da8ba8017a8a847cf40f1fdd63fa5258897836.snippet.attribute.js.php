<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:44:19
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/category/model/attribute.js" */ ?>
<?php /*%%SmartyHeaderCode:56468256857837883259f69-41723391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9da8ba8017a8a847cf40f1fdd63fa5258897836' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/category/model/attribute.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56468256857837883259f69-41723391',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57837883275ea8_48035431',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57837883275ea8_48035431')) {function content_57837883275ea8_48035431($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model
 *
 * This Model is extended from the Ext.data.Model to add the category attributes
 *
 */
//
Ext.define('Shopware.apps.Category.model.Attribute', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.model.Category',
    /**
     * Configure the data communication
     * @object
     */
    fields:[
		//
        { name : 'id', type: 'int' },
        { name : 'categoryId', type: 'int', useNull: true },
        { name : 'attribute1', type: 'string', useNull:true, defaultValue: null },
        { name : 'attribute2', type: 'string', useNull:true, defaultValue: null },
        { name : 'attribute3', type: 'string', useNull:true, defaultValue: null },
        { name : 'attribute4', type: 'string', useNull:true, defaultValue: null },
        { name : 'attribute5', type: 'string', useNull:true, defaultValue: null },
        { name : 'attribute6', type: 'string', useNull:true, defaultValue: null }
    ]
});
//
<?php }} ?>