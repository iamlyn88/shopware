<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:29
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/model/main/form.js" */ ?>
<?php /*%%SmartyHeaderCode:79888982578378514fb473-19415633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8440de136144bd8b7219d6b303ff4a8db4938b8' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/model/main/form.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79888982578378514fb473-19415633',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5783785151fe39_77761505',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5783785151fe39_77761505')) {function content_5783785151fe39_77761505($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.model.main.Form', {
    extend: 'Ext.data.Model',

    fields: [
		//
        { name: 'id', type: 'int', useNull: true },
        { name: 'label', type: 'string' },
        { name: 'name', type: 'string' },
        { name: 'description', type: 'string' }
    ],

    associations: [
        {
        type: 'hasMany', model: 'Shopware.apps.Config.model.main.Element',
        name: 'getElements', associationKey: 'elements'
    },
    {
        type: 'hasMany', model: 'Shopware.apps.Config.model.main.FormTranslation',
        name: 'getTranslation', associationKey: 'translations'
    }
    ]
});
//
<?php }} ?>