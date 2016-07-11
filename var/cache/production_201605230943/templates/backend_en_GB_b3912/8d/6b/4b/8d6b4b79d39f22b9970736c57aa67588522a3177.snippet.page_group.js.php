<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:34
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/model/form/page_group.js" */ ?>
<?php /*%%SmartyHeaderCode:120322278557837856ec6de8-14331921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d6b4b79d39f22b9970736c57aa67588522a3177' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/model/form/page_group.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120322278557837856ec6de8-14331921',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57837856ee0550_63269944',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57837856ee0550_63269944')) {function content_57837856ee0550_63269944($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.model.form.PageGroup', {
    extend: 'Ext.data.Model',
    fields: [
		//
        { name: 'id', type: 'int' },
        { name: 'name', type: 'string' },
        { name: 'key', type: 'string' },
        { name: 'mappingId', type: 'int', convert: function(v, record) {
            if (v === null) {
                return null;
            }

            if (Ext.typeOf(v) === 'number') {
                return v;
            }

            if (record.raw && record.raw.mapping && record.raw.mapping.id) {
                return record.raw.mapping.id;
            }

            return v;
        }, useNull: true },
        { name: 'mapping', type: 'string', convert: function(v, record) {
            return (v && v.name) || v;
        }, useNull: true },
        { name: 'active', type: 'boolean' }
    ]
});
//
<?php }} ?>