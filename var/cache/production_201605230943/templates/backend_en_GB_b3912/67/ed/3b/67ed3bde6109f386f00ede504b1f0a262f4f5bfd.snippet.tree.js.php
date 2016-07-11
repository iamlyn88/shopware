<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:44:19
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/category/model/tree.js" */ ?>
<?php /*%%SmartyHeaderCode:16559379475783788320d3f5-56774502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67ed3bde6109f386f00ede504b1f0a262f4f5bfd' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/category/model/tree.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16559379475783788320d3f5-56774502',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5783788323cbe2_90530596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5783788323cbe2_90530596')) {function content_5783788323cbe2_90530596($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model
 *
 * This Model is extended from the Shopware.model.Category to add
 * a proxy configuration.
 *
 */
//
Ext.define('Shopware.apps.Category.model.Tree', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.model.Category',
    /**
     * Configure the data communication
     * @object
     */
    fields:[
		// 
        { name : 'id', type: 'integer', useNull:true },
        { name : 'parentId', type: 'integer' },
        { name : 'name', type: 'string' },
        { name : 'position', type: 'integer', useNull:true, defaultValue: null},
        { name : 'previousId', type: 'integer', useNull:true, defaultValue: null}
    ],
    proxy : {
        type : 'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        api : {
            read : '<?php echo '/backend/category/getList';?>',
            create  : '<?php echo '/backend/category/createDetail';?>',
            update  : '<?php echo '/backend/category/moveTreeItem';?>',
            destroy : '<?php echo '/backend/category/delete';?>'
        },
        /**
         * Configure the data reader
         * @object
         */
        reader : {
            type : 'json',
            root: 'data'
        }
    },
    associations: [
        { type: 'hasMany', model: 'Shopware.apps.Category.model.Attribute', name: 'getAttributes', associationKey: 'attribute' }
    ]

});
//
<?php }} ?>