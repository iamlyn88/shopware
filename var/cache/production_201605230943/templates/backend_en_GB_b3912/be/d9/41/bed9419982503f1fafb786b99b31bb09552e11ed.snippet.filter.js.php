<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:14
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/article_list/model/filter.js" */ ?>
<?php /*%%SmartyHeaderCode:169117106857837842963ca4-37149069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bed9419982503f1fafb786b99b31bb09552e11ed' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/article_list/model/filter.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169117106857837842963ca4-37149069',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57837842a395e7_39721295',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57837842a395e7_39721295')) {function content_57837842a395e7_39721295($_smarty_tpl) {?>/**
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
 * Shopware Model - Filter model
 *
 * The filter model represents a single filter
 */
//
//
Ext.define('Shopware.apps.ArticleList.model.Filter', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Ext.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields: [
		//
        { name: 'id', type: 'int', useNull: true },
        { name: 'name', type: 'string' },
        { name: 'filterString', type: 'string' },
        { name: 'description', type: 'string' },
        { name: 'create', type: 'datetime' },
        { name: 'isFavorite', type: 'boolean' },
        { name: 'isSimple', type: 'boolean' },
        {
            name : 'groupName',
            type: 'string',
            convert : function(value, record) {
                return record.get('isFavorite') ? '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'group_favorite','default'=>'Favorite','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'group_favorite','default'=>'Favorite','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Favorites<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'group_favorite','default'=>'Favorite','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'group_filter','default'=>'Filter','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'group_filter','default'=>'Filter','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Other filters<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'group_filter','default'=>'Filter','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
            }
        }
//        { name: 'groupName', type: 'string' },
    ],

    /**
     * Configure the data communication
     * @object
     */
    proxy:{
        /**
         * Set proxy type to ajax
         * @string
         */
        type:'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        api: {
            create: '<?php echo '/backend/ArticleList/saveFilter';?>',
            update: '<?php echo '/backend/ArticleList/saveFilter';?>',
            destroy: '<?php echo '/backend/ArticleList/deleteFilter';?>'
        },

        /**
         * Configure the data reader
         * @object
         */
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    }



});
//
<?php }} ?>