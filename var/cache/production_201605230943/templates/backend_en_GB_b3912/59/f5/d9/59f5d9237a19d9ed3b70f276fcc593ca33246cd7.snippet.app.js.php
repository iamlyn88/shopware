<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:28
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/app.js" */ ?>
<?php /*%%SmartyHeaderCode:13838972245783785063ffa6-83752400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59f5d9237a19d9ed3b70f276fcc593ca33246cd7' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/app.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13838972245783785063ffa6-83752400',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5783785069a1a6_07587996',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5783785069a1a6_07587996')) {function content_5783785069a1a6_07587996($_smarty_tpl) {?>/**
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
 * @package    Shopware_Cache
 * @subpackage Cache
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Application - Config module
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Config', {

    extend: 'Enlight.app.SubApplication',

    controllers: [ 'Main', 'Document' ],

    bulkLoad: true,
    loadPath: '<?php echo '/backend/Config/load';?>',

    params: {},
    defaultController: 'Main',

    /**
     * This method will be called when all dependencies are solved and
     * all member controllers, models, views and stores are initialized.
     */
    launch: function() {
        var me = this,
            controller = me.getController(me.defaultController);

        return controller.mainWindow;
    }
});
//

<?php }} ?>