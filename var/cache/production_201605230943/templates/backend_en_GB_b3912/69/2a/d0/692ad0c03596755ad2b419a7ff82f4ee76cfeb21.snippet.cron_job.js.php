<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:35
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/store/form/cron_job.js" */ ?>
<?php /*%%SmartyHeaderCode:185692566757837857aff9a9-64239012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '692ad0c03596755ad2b419a7ff82f4ee76cfeb21' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/store/form/cron_job.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185692566757837857aff9a9-64239012',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57837857b1b912_97041966',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57837857b1b912_97041966')) {function content_57837857b1b912_97041966($_smarty_tpl) {?>/**
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
 * todo@all: Documentation
 */

//
Ext.define('Shopware.apps.Config.store.form.CronJob', {
    extend: 'Ext.data.Store',
    model: 'Shopware.apps.Config.model.form.CronJob',
    remoteSort: true,
    remoteFilter: true,
    pageSize: 20,
    proxy: {
        type: 'ajax',
        url: '<?php echo '/backend/Config/getTableList';?>?_repositoryClass=cronJob',
        api: {
            create: '<?php echo '/backend/Config/saveTableValues';?>?_repositoryClass=cronJob',
            update: '<?php echo '/backend/Config/saveTableValues';?>?_repositoryClass=cronJob',
            destroy: '<?php echo '/backend/Config/deleteTableValues';?>?_repositoryClass=cronJob'
        },
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
//
<?php }} ?>