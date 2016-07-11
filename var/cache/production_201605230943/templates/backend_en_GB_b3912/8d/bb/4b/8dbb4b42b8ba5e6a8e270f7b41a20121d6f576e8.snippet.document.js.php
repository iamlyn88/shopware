<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:28
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/controller/document.js" */ ?>
<?php /*%%SmartyHeaderCode:36383429757837850cdf763-20022832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dbb4b42b8ba5e6a8e270f7b41a20121d6f576e8' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/controller/document.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36383429757837850cdf763-20022832',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57837850cf6018_52712120',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57837850cf6018_52712120')) {function content_57837850cf6018_52712120($_smarty_tpl) {?>/**
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

//

/**
 * Shopware Controller - Config backend module
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Config.controller.Document', {

    extend: 'Enlight.app.Controller',

    views: [
		'form.Document'
    ],

    stores:[
		'form.Document',
		'detail.Document',
		'form.Number'
    ],

    models:[
		'form.Document',
		'form.DocumentElement'
    ],

    refs: [
        { ref: 'detail', selector: 'config-base-detail' }
    ],

    /**
     *
     */
    init: function () {
        var me = this;

        me.control({
			'config-form-document config-base-table': {
				selectionchange: function(table, records) {
					var me = this,
						elementFieldSet = me.getDetail().down('fieldset[name=elementFieldSet]'),
						contentField = elementFieldSet.down('tinymce[name$=Value]'),
						styleField = elementFieldSet.down('textarea[name$=Style]');

					Ext.each(elementFieldSet.items.items, function(item){
						if(item.xtype == 'tinymce' || item.xtype == 'textarea'){
							item.hide();
							item.setValue(null);
						}
					});
				}
			},
			'config-base-detail combo[name=elements]': {
				change: me.onSelectElement
			}
        });

        me.callParent(arguments);
    },

	onSelectElement: function(combo, newValue, oldValue){
		//If there is no new value selected, so the event got fired otherwise
		if(!newValue){
			return;
		}
		var me = this,
			elementFieldSet = me.getDetail().down('fieldset[name=elementFieldSet]'),
			elementComboBox = elementFieldSet.down('combo'),
			elementStore = elementComboBox.getStore();
		//Checks if there was an value selected before changing it
		//Needed to save the values to the record
		if(oldValue){
			var oldRecord = elementStore.getById(oldValue),
				oldFieldName = oldRecord.get('name'),
				oldContentField = elementFieldSet.down('tinymce[name=' + oldFieldName + '_Value]'),
				oldStyleField = elementFieldSet.down('textarea[name=' + oldFieldName + '_Style]');

			oldRecord.set('value', oldContentField.getValue());
			oldRecord.set('style', oldStyleField.getValue());
			oldContentField.hide();
			oldStyleField.hide();
		}

		var newRecord = elementStore.getById(newValue),
		    newFieldName = newRecord.get('name'),
			newContentField = elementFieldSet.down('tinymce[name=' + newFieldName + '_Value]'),
			newStyleField = elementFieldSet.down('textarea[name=' + newFieldName + '_Style]');


		//Show the dynamical fields and fill them
		newContentField.show();
		newStyleField.show();
		newContentField.setValue(newRecord.get('value'));
		newStyleField.setValue(newRecord.get('style'));
	}

});
//
<?php }} ?>