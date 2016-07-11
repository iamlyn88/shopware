<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:15
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/order/model/position_attribute.js" */ ?>
<?php /*%%SmartyHeaderCode:17755529915783784308ff63-91991893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b997649120129e746e74775c42e7ea04bb32afd8' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/order/model/position_attribute.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17755529915783784308ff63-91991893',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578378430cf758_16839944',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578378430cf758_16839944')) {function content_578378430cf758_16839944($_smarty_tpl) {?>/**
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
 */
//
Ext.define('Shopware.apps.Order.model.PositionAttribute', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',
    /**
     * Extends the models fields with the order id field.
     * @array
     */
    fields: [
		//
        { name: 'id', type: 'int' },
        { name: 'orderDetailId', type: 'int', useNull: true },
        { name: 'attribute1', type: 'string', useNull: true },
        { name: 'attribute2', type: 'string', useNull: true },
        { name: 'attribute3', type: 'string', useNull: true },
        { name: 'attribute4', type: 'string', useNull: true },
        { name: 'attribute5', type: 'string', useNull: true },
        { name: 'attribute6', type: 'string', useNull: true }
    ]
});
//

<?php }} ?>