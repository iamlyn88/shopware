<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:44:19
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/category/controller/settings.js" */ ?>
<?php /*%%SmartyHeaderCode:1885750582578378839d1cf8-45236903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4575eb84018a36cb7a05f9bb3573e88c9c3a12b6' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/category/controller/settings.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1885750582578378839d1cf8-45236903',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578378839ee152_00557434',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578378839ee152_00557434')) {function content_578378839ee152_00557434($_smarty_tpl) {?>/**
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
 * @package    Category
 * @subpackage Controller
 * @version    $Id$
 * @author shopware AG
 */

/*  */

/**
 * Shopware Controller - category management controller
 *
 * The category management controller handles the initialisation of the category tree.
 */
//
Ext.define('Shopware.apps.Category.controller.Settings', {
    /**
     * Extend from the standard ExtJS 4 controller
     * @string
     */
    extend: 'Ext.app.Controller',
    /**
     * Define references for the different parts of our application. The
     * references are parsed by ExtJS and Getter methods are automatically created.
     *
     * @array
     */
    refs: [
        { ref: 'settingsForm', selector: 'category-category-tabs-settings' },
        { ref: 'mainWindow', selector: 'category-main-window' }
    ],

    /**
     * Creates the necessary event listener for this
     * specific controller and opens a new Ext.window.Window
     * to display the sub-application
     *
     * @return void
     */
    init: function() {
        var me = this;
        me.control({
            'category-category-tabs-settings':{
                recordloaded : me.onRecordLoaded
            },
            // Save button in settings tab
            'category-category-tabs-settings button[action=categorySaveButton]':{
                'click' : me.onSaveSettings
            }
        });
    },
    /**
     * Reacts if the event recordloaded is fired and hides or shows the template selection based
     * on the parent ID of the loaded record.
     *
     * @event recordloaded
     * @param record [Ext.data.Model]
     * @return void
     */
    onRecordLoaded : function(record, treeRecord) {
        var me = this,
            form = me.getSettingsForm();

        if(record.getId() != me.subApplication.defaultRootNodeId){
            if(~~(1 * record.get('parentId')) === 1) {
                form.templateComboBox.hide();
            } else {
                form.templateComboBox.show();
            }

            form.streamSelection.enable();

            //to select the settings if the tree element is not a leaf
            if(!treeRecord.get('leaf')){
                me.getMainWindow().tabPanel.setActiveTab(0);
            }

            //show or hide the emotionNotice if an emotion is mapped to this category
            if(record.getEmotion().count()){
                form.emotionNotice.show();
            }
            else{
                form.emotionNotice.hide();
            }
            me.enableForm();
        }
        else {
            //if the main category is clicked disable the settings form
            me.disableForm();
        }
    },
    /**
     * Enables the form which is disabled by default
     *
     * @return void
     */
    enableForm : function() {
        var me   = this,
            form = me.getSettingsForm();
        form.defaultSettings.enable();
        form.createCategory.enable();
        form.cmsSettings.enable();
        form.metaInfo.enable();
        form.attributes.enable();
    },

    /**
     * Disables the form which is disabled by default
     *
     * @return void
     */
    disableForm : function() {
        var me   = this,
            form = me.getSettingsForm();
        form.defaultSettings.disable();
        form.createCategory.disable();
        form.cmsSettings.disable();
        form.metaInfo.disable();
        form.attributes.disable();
    }
});
//

<?php }} ?>