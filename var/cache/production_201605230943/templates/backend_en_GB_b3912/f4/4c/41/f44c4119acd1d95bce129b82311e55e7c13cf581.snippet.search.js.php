<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:10
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/index/view/search.js" */ ?>
<?php /*%%SmartyHeaderCode:21347656725783783e7c0976-04431288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f44c4119acd1d95bce129b82311e55e7c13cf581' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/index/view/search.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21347656725783783e7c0976-04431288',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5783783e7ea0e3_12978830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5783783e7ea0e3_12978830')) {function content_5783783e7ea0e3_12978830($_smarty_tpl) {?>/**
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
 * Shopware Global Search
 *
 * This component creates the global search for the Shopware
 * Backend.
 */
//
Ext.define('Shopware.apps.Index.view.Search', {
	extend: 'Ext.container.Container',
	alias: 'widget.searchfield',
    alternateClassName: 'Shopware.Search',
	cls: 'searchfield-container',

    /**
     * Minimum search query length
     *
     * @integer
     */
	minSearchLength: 4,

    /**
     * URL which handles the search requests
     *
     * @string
     */
	requestUrl: '<?php echo '/backend/search';?>',

    /**
     * Class name which will be set on focus
     *
     * @string
     */
    focusCls: 'searchcontainer-focus',

    /**
     * Offset left to display the drop down menu directly under
     * the search field.
     *
     * @default 0
     * @integer
     */
    dropDownOffsetLeft: 0,

	/**
	 * Initialize the search and creates the search field and
	 * the drop down menu
	 */
	initComponent: function() {
		var me = this;

        me.callParent(arguments);

		me.searchField = Ext.create('Ext.form.field.Text', {
			emptyText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'search','default'=>'Search...','namespace'=>'backend/index/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'search','default'=>'Search...','namespace'=>'backend/index/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'search','default'=>'Search...','namespace'=>'backend/index/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
			cls: 'searchfield',
			margin: '5 0',
			allowBlank: true,
			enableKeyEvents: true,
            checkChangeBuffer: 400,
			listeners: {
				scope: me,
                change:me.sendSearchRequest,
                focus: function(field) {
                    me.addCls(me.focusCls);
                    me.sendSearchRequest(field);
                },
                blur: function() {

                    // Hide search drop down
                    Ext.defer(function() {
                        Shopware.searchField.searchDropDown.hide();
                        me.removeCls(me.focusCls);
                    }, 1000);
                }
			}

		});

		me.searchDropDown = Ext.create('Ext.container.Container', {
			cls: Ext.baseCSSPrefix + 'search-dropdown',
			renderTo: Ext.getBody(),
			style: 'position: fixed; z-index: 20030',
			hidden: true
		});

		me.add(me.searchField);
        Shopware.searchField = me;
	},

    /**
     * Terminates the position of the search drop down menu
     *
     * @public
     * @return void
     */
    afterRender: function() {
        var me = this;

        me.callParent(arguments);

        var timeout = window.setTimeout(function() {
            me.dropDownOffsetLeft = me.getEl().dom.offsetLeft;

            me.searchDropDown.getEl().setLeft(634);
            clearTimeout(timeout);
            timeout = null;
        }, 150);

    },

	/**
	 * This function sends the AJAX request depending by the field parameter and replaces
	 * the content of the drop down menu
	 *
	 * @param (object) field
	 */
	sendSearchRequest: function(field) {
		var value = field.getValue(),
			me = this;

		// Check the length of the search query
		if(value.length < this.minSearchLength) {
			me.searchDropDown.update('');
			me.searchDropDown.hide();
			return false;
		}

		// Request the search result
		Ext.Ajax.request({
			url: me.requestUrl,
			params: { search: value },
			method: 'POST',
			success: function(response) {
				var html = response.responseText,
					position = me.searchField.getPosition();

				me.searchDropDown.update(html);
				me.searchDropDown.getEl().applyStyles({
					top: position[1]+21+'px'
				});
				me.searchDropDown.show();
			}
		});

	}
});
<?php }} ?>