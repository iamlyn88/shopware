<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:14
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/customer/model/billing_attributes.js" */ ?>
<?php /*%%SmartyHeaderCode:177773688857837842bfc182-38254752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bd9a3f3b62b41bb4835d61a98bbc3f4c35aea79' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/customer/model/billing_attributes.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177773688857837842bfc182-38254752',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57837842c22e46_16942788',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57837842c22e46_16942788')) {function content_57837842c22e46_16942788($_smarty_tpl) {?>/**
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
 * @package    Customer
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Customer list backend module.
 */
//
Ext.define('Shopware.apps.Customer.model.BillingAttributes', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',

    fields: [
		//
        { name:'id', type:'int' },
        { name:'customerBillingId', type:'int', useNull: true },
        { name:'text1', type:'string', useNull: true },
        { name:'text2', type:'string', useNull: true },
        { name:'text3', type:'string', useNull: true },
        { name:'text4', type:'string', useNull: true },
        { name:'text5', type:'string', useNull: true },
        { name:'text6', type:'string', useNull: true }
    ]

});
//
<?php }} ?>