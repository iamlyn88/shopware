<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:08
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/base/store/locale.js" */ ?>
<?php /*%%SmartyHeaderCode:12087039675783783c2bc439-30832432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70b4d6ef17aab03edf7c5374fb107042088fcee2' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/base/store/locale.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12087039675783783c2bc439-30832432',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5783783c2c9474_20491772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5783783c2c9474_20491772')) {function content_5783783c2c9474_20491772($_smarty_tpl) {?>/**
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
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Global Stores and Models
 *
 * todo@all: Documentation
 */
Ext.define('Shopware.apps.Base.store.Locale', {
    extend: 'Ext.data.Store',

    alternateClassName: [
        'Shopware.store.Locale',
        'Shopware.store.Locales',
        'Shopware.apps.Base.store.Locales'
    ],
    storeId: 'base.Locale',
    model : 'Shopware.apps.Base.model.Locale',
    pageSize: 1000,

    proxy: {
        type: 'ajax',
        url: '<?php echo '/backend/base/getLocales';?>',
        reader: {
            type: 'json',
            root: 'data',
            totalProperty: 'total'
        }
    }
}).create();
<?php }} ?>