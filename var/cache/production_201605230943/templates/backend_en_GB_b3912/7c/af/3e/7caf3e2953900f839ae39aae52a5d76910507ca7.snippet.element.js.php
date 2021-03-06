<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:29
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/model/main/element.js" */ ?>
<?php /*%%SmartyHeaderCode:339735867578378515503e3-59349765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7caf3e2953900f839ae39aae52a5d76910507ca7' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/model/main/element.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '339735867578378515503e3-59349765',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57837851577ec3_30752271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57837851577ec3_30752271')) {function content_57837851577ec3_30752271($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.model.main.Element', {
    extend: 'Ext.data.Model',
    fields: [
		//
        { name: 'id', type: 'int', useNull: true },
        { name: 'name', type: 'string' },
        { name: 'value' },
        { name: 'label', type: 'string' },
        { name: 'description', type: 'string', useNull: true },
        { name: 'type', type: 'string', useNull: true },
        { name: 'required', type: 'boolean' },
        { name: 'scope', type: 'int' },
        'options'
    ],
    associations: [
        {
            type: 'hasMany', model: 'Shopware.apps.Config.model.main.ElementTranslation',
            name: 'getTranslation', associationKey: 'translations'
        },
        {
            type: 'hasMany', model: 'Shopware.apps.Config.model.main.Value',
            name: 'getValues', associationKey: 'values'
        }

    ]
});
//
<?php }} ?>