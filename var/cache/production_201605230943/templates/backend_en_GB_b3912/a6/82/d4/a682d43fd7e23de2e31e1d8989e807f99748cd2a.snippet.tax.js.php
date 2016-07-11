<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:35
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/store/detail/tax.js" */ ?>
<?php /*%%SmartyHeaderCode:59275946657837857bc6ee6-96039100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a682d43fd7e23de2e31e1d8989e807f99748cd2a' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/store/detail/tax.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59275946657837857bc6ee6-96039100',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57837857c0b469_77980299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57837857c0b469_77980299')) {function content_57837857c0b469_77980299($_smarty_tpl) {?>/**
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
 */

/**
 * Shopware Backend - Tax store
 *
 * todo@all: Documentation
 */

//
Ext.define('Shopware.apps.Config.store.detail.Tax', {
	extend: 'Ext.data.Store',
	model : 'Shopware.apps.Config.model.form.Tax',
    remoteSort: true,
    remoteFilter: true,
    pageSize: 20,
    proxy: {
        type: 'ajax',
        url: '<?php echo '/backend/Config/getValues';?>?_repositoryClass=tax',
        api: {
            create: '<?php echo '/backend/Config/saveValues';?>?_repositoryClass=tax',
            update: '<?php echo '/backend/Config/saveValues';?>?_repositoryClass=tax',
            destroy: '<?php echo '/backend/Config/deleteValues';?>?_repositoryClass=tax'
        },
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
//
<?php }} ?>