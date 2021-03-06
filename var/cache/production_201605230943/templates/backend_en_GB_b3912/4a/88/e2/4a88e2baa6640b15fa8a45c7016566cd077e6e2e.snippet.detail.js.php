<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:44:19
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/category/model/detail.js" */ ?>
<?php /*%%SmartyHeaderCode:273236367578378831c4ba0-92977366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a88e2baa6640b15fa8a45c7016566cd077e6e2e' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/category/model/detail.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '273236367578378831c4ba0-92977366',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57837883208e69_33636892',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57837883208e69_33636892')) {function content_57837883208e69_33636892($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Category.model.Detail', {

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
        { name : 'streamId', type: 'integer', useNull:true, defaultValue: null },
        { name : 'name', type: 'string' },
        { name : 'position', type: 'integer', useNull:true, defaultValue: null},
        { name : 'metaKeywords', type: 'string', useNull:true, defaultValue: null },
        { name : 'metaTitle', type: 'string', useNull:true, defaultValue: null },
        { name : 'metaDescription', type: 'string', useNull:true, defaultValue: null },
        { name : 'cmsHeadline', type: 'string', useNull:true, defaultValue: null },
        { name : 'cmsText', type: 'string', useNull:true, defaultValue: null },
        { name : 'template', type: 'string', useNull:true, defaultValue: null },
        { name : 'productBoxLayout', type: 'string', useNull:true, defaultValue: null },
        { name : 'noViewSelect', type: 'boolean' },
        { name : 'active', type: 'boolean' },
        { name : 'blog', type: 'boolean' },
        { name : 'showFilterGroups', type: 'boolean' },
        { name : 'external', type: 'string' , useNull:true, defaultValue: null},
        { name : 'hideFilter', type: 'boolean' },
        { name : 'hideTop', type: 'boolean' },
        { name : 'imagePath', type: 'string' , useNull:true, defaultValue: null}

    ],
    proxy : {
        type : 'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        api : {
            read : '<?php echo '/backend/category/getDetail';?>',
            create  : '<?php echo '/backend/category/createDetail';?>',
            update  : '<?php echo '/backend/category/updateDetail';?>'

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
    /**
     * Define the associations of the category model
     * @array
     */
    associations:[
        {
            type:'hasMany',
            model:'Shopware.apps.Category.model.Attribute',
            name:'getAttribute',
            associationKey:'attribute'
        },
        {
            type:'hasMany',
            model:'Shopware.apps.Category.model.Emotion',
            name:'getEmotion',
            associationKey:'emotion'
        },
        {
            type:'hasMany',
            model:'Shopware.apps.Base.model.CustomerGroup',
            name:'getCustomerGroups',
            associationKey:'customerGroups'
        }
    ]
});
//
<?php }} ?>