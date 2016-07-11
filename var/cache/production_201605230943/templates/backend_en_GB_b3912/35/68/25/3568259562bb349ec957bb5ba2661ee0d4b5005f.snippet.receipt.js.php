<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:14
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/order/model/receipt.js" */ ?>
<?php /*%%SmartyHeaderCode:16177326257837842e56bb6-53491863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3568259562bb349ec957bb5ba2661ee0d4b5005f' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/order/model/receipt.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16177326257837842e56bb6-53491863',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57837842ea1334_53962378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57837842ea1334_53962378')) {function content_57837842ea1334_53962378($_smarty_tpl) {?>/**
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
 * @package    Order
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Order list backend module.
 *
 * The list model represents a single row for the order list grid.
 * The model data are concat by the different order associations.
 */
//
Ext.define('Shopware.apps.Order.model.Receipt', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',

    /**
     * Unique identifier field
     * @string
     */
    idProperty:'id',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
		//
        { name: 'id', type:'int' },
        { name: 'date', type:'date' },
        { name: 'typeId', type:'int' },
        { name: 'customerId', type:'int' },
        { name: 'orderId', type:'int' },
        { name: 'amount', type:'float' },
        { name: 'documentId', type:'int' },
        { name: 'hash', type:'string' },
        { name: 'typeName', type:'string' }
    ],
    /**
     * @array
     */
    associations:[
        { type:'hasMany', model:'Shopware.apps.Order.model.ReceiptAttribute', name:'getAttributes', associationKey:'attributes' },
        { type:'hasMany', model:'Shopware.apps.Base.model.DocType', name:'getDocType', associationKey:'type' }
    ]

});
//
<?php }} ?>