<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:29
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/model/form/document.js" */ ?>
<?php /*%%SmartyHeaderCode:165886893578378514684d8-31656174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cd8ddc152259808f4e452d1e3da41cdfadf7f3b' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/model/form/document.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165886893578378514684d8-31656174',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5783785148ad50_02275129',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5783785148ad50_02275129')) {function content_5783785148ad50_02275129($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.model.form.Document', {
    extend:'Ext.data.Model',

    fields: [
		//
        { name: 'id', type: 'int' },
        { name: 'name',  type: 'string' },
        { name: 'template',  type: 'string' },
        { name: 'numbers',  type: 'string' },
        { name: 'left',  type: 'int' },
        { name: 'right',  type: 'int' },
        { name: 'top',  type: 'int' },
        { name: 'bottom',  type: 'int' },
        { name: 'pageBreak',  type: 'int' }
    ],

	associations: [{
		type: 'hasMany',
		model: 'Shopware.apps.Config.model.form.DocumentElement',
		name: 'getElements',
		associationKey: 'elements'
	}]
});
//
<?php }} ?>