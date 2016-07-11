<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:34
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/model/form/currency.js" */ ?>
<?php /*%%SmartyHeaderCode:138349252157837856dd38f2-69161770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75f6fc85093f93854045e9fa73759d94b21af2df' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/model/form/currency.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138349252157837856dd38f2-69161770',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57837856de9bd4_59789142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57837856de9bd4_59789142')) {function content_57837856de9bd4_59789142($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.model.form.Currency', {
    extend: 'Shopware.apps.Base.model.Currency',

    fields: [
		//
        { name: 'symbol', type: 'string', useNull: true },
        { name: 'symbolPosition', type: 'int', useNull: true },
        { name: 'default', type: 'boolean' },
        { name: 'factor', type: 'float' },
        { name: 'position', type: 'int', useNull: true },
        { name: 'deletable', type: 'boolean', convert: function(v, r) { return !r.data.default; } }
    ]
});
//
<?php }} ?>