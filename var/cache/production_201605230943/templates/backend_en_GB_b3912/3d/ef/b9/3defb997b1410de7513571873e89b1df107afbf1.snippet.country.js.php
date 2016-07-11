<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:34
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/model/form/country.js" */ ?>
<?php /*%%SmartyHeaderCode:71693676557837856e17a42-57268408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3defb997b1410de7513571873e89b1df107afbf1' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/model/form/country.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71693676557837856e17a42-57268408',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57837856e3c096_45803617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57837856e3c096_45803617')) {function content_57837856e3c096_45803617($_smarty_tpl) {?>/**
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

/**
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Config.model.form.Country', {
    extend: 'Shopware.apps.Base.model.Country',

    fields: [
		//
        { name: 'shippingFree', type: 'boolean' },
        { name: 'taxFree', type: 'boolean' },
        { name: 'taxFreeUstId', type: 'boolean' },
        { name: 'forceStateInRegistration', type: 'boolean' },
        { name: 'displayStateInRegistration', type: 'boolean' },
//        { name: 'taxFreeUstIdChecked', type: 'boolean' },
        { name: 'iso3', type: 'string' },
        { name: 'description', type: 'string' },
        { name: 'area', convert: function(v, record) {
            return record.raw && record.raw.area && record.raw.area.name;
        }, useNull: true },
        { name: 'areaId', convert: function(v, record) {
            return v || record.raw && record.raw.area && record.raw.area.id;
        }, useNull: true }
    ],

    associations: [{
        type: 'hasMany',
        model: 'Shopware.apps.Base.model.CountryState',
        name: 'getStates',
        associationKey: 'states'
    },{
        type: 'hasMany',
        model: 'Shopware.apps.Base.model.CountryAttribute',
        name: 'getAttribute',
        associationKey: 'attribute'
    }]
});
//

//
Ext.define('Shopware.apps.Config.model.CountryAttribute', {
    extend: 'Ext.data.Model',

    fields : [
        { name: 'id', type: 'int' }
    ]
});
//
<?php }} ?>