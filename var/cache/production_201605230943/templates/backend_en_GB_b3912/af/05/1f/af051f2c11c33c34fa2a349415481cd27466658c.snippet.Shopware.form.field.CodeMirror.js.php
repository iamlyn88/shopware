<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:08
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/base/component/Shopware.form.field.CodeMirror.js" */ ?>
<?php /*%%SmartyHeaderCode:9241525895783783c71a245-25448848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af051f2c11c33c34fa2a349415481cd27466658c' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/base/component/Shopware.form.field.CodeMirror.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9241525895783783c71a245-25448848',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5783783c767b30_56352331',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5783783c767b30_56352331')) {function content_5783783c767b30_56352331($_smarty_tpl) {?>/**
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
 * @subpackage Component
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware UI - CodeMirror editor component
 *
 * This component provides the CodeMirror editor
 * as a ExtJS 4 form field. The componets supports the
 * two themes "default" and "monokai".
 *
 * The supported syntax modes are lazy loaded
 * during the initializing of the editor component.
 *
 * @example
 * Ext.create('Ext.form.FormPanel', {
 *     title      : 'Sample TextArea',
 *     width      : 400,
 *     bodyPadding: 10,
 *     renderTo   : Ext.getBody(),
 *     items: [{
 *         xtype     : 'codemirrorfield',
 *         name      : 'message',
 *         fieldLabel: 'Message',
 *         anchor    : '100%'
 *     }]
 * });
 *
 * @example
 * Ext.create('Shopware.form.field.CodeMirror', {
 *     fieldLabel: 'CodeMirror',
 *     anchor: '100%',
 *     name: 'codemirror-editor',
 *     height: 100
 * });
 */
Ext.define('Shopware.form.field.CodeMirror',
/** @lends Ext.form.field.TextArea# */
{
    /**
     * Extends the default textarea to provide the
     * TinyMCE form field
     * @string
     */
    extend: 'Ext.form.field.TextArea',

    /**
     * Defines alternate names for this class
     * @array
     */
    alternateClassName: [ 'Shopware.form.CodeMirror', 'Ext.form.field.CodeMirror' ],

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets
     * @array
     */
    alias: [ 'widget.codemirrorfield', 'widget.codemirror' ],

    /**
     * Property which holds the instance of the CodeMirror code editor for later usage
     *
     * @default null
     * @object
     */
    editor: null,

    /**
     * Height of the underlying textarea
     *
     * @default 0
     * @integer
     */
    editorHeight: 0,

    /**
     * Width of the underlying textarea
     *
     * @default 0
     * @integer
     */
    editorWidth: 0,

    /**
     * Truthy, if the editor is already rendered, otherwise falsy.
     * @default false
     * @boolean
     */
    isEditorRendered: false,

    /**
     * Property which holds the path to the mode directory of
     * the CodeMirror editor.
     * @string
     */
     modePath: 'http://five.shopware.vn/engine/Library/CodeMirror/mode',

    /**
     * Property which holds the loades modes to remove
     * the javascript files after loading
     */
    loadedModes: Ext.create('Ext.util.MixedCollection'),

    /**
     * Init the component
     */
    initComponent : function() {
        var me = this;
        me.on({ resize: me.onResize });

        me.addEvents('editorready');

        me.callParent(arguments);
    },

    /**
     * Constructor which sets additional configurations
     * for the CodeMirror editor.
     *
     * @public
     * @constructor
     * @param [object] config - Component configuration
     * @return void
     */
    constructor: function(config) {
        var me = this;

        // Set the indent unit
        Ext.applyIf(config, {
            indentUnit: 4,
            theme: 'default'
        });

        me.config = config;

        me.callParent(arguments);

        Ext.apply(config, {
            onChange: function() {
                me.checkChange();
            },
            onFocus: function() {
                me.fireEvent('focus', me);
            }
        });
    },

    /**
     * Sets current textarea height

     * @return void
     */
    onResize: function(component, width, height) {
        var me = this;

        me.editorHeight = height;
        me.editorWidth = width - 10;
        me.resizeEditor();
    },


    /**
     * Checks if the neccessary syntax mode is loaded
     * and initializes the syntax mode or initializes
     * the CodeMirror editor instanly.
     *
     * @private
     * @return void
     */
    onRender: function() {
        var me = this;
        me.callParent(arguments);

        // Check if the CodeMirror editor files are included
        if(!window.CodeMirror) {
            Ext.Error.raise("The CodeMirror editor source files aren't included in the project");
        }

        // Check if the CodeMirror editor files are included
        if(!me.config.mode) {
            Ext.Error.raise("The CodeMirror mode is not configured");
        }

        // Check if the passed mode is available
        var availableModes = CodeMirror.modes,
            modeActive = false;

        Ext.Array.each(availableModes, function(value) {
            if(value === me.config.mode) {
                modeActive = true;
            }
        });

        if(!modeActive) {
            me.loadJSFile(me.modePath + '/' + me.config.mode + '/' + me.config.mode + '.js');
        } else {
            if(!me.isEditorRendered) {
                me.initEditor();
            }
        }
    },

    /**
     * Initializes the CodeMirror with the
     * passed configuration and sets the
     * correct height of the editor
     *
     * @private
     * @return [object] instance of the CodeMirror editor
     */
    initEditor: function() {
        var me = this,
            el = me.inputEl;

        me.editor = CodeMirror.fromTextArea(document.getElementById(el.id), me.config);
        me.isEditorRendered = true;

        // Bind `change` event to the editor to write back the content of the component to the underlying textarea.
        me.editor.on('change', function() {
            me.editor.save();
        });

        me.resizeEditor();

        me.editor.setValue(me.rawValue);


        me.fireEvent('editorready', me, me.editor);
        return me.editor;
    },

    /**
     * Resize editor window to current textarea height
     * @return void
     */
    resizeEditor: function() {
        var me = this,
            scroller,
            height, width;

        if (me.editor && me.el) {

            // Set the editor height
            if (me.height) {
                height = me.height;
            } else {
                height = me.el.getHeight();
            }

            // Set the editor width
            if (me.width) {
                width = me.width - 10;
            } else {
                width = '100%';
            }

            scroller = Ext.get(me.editor.getScrollerElement());
            scroller.setHeight(height);
            scroller.setWidth(width);

            me.editor.refresh();
        }
    },

    /**
     * Resets the value of the CodeMirror editor
     *
     * @public
     * @return [string] Value of the underlying textarea
     */
    reset: function() {
        if (this.editor) {
            this.editor.setValue('');
        }
        return this.callParent(arguments);
    },

    /**
     * Returns the value of the CodeMirror editor
     *
     * @public
     * @return [string] Value of the underlying textarea
     */
    getValue: function() {
        if (this.editor) {
            this.editor.save();
        }
        return this.callParent(arguments);
    },

    /**
     * Sets the passed value to the CodeMirror editor
     * and the underlying textarea
     *
     * @param [string] value - The value to set
     * @return [string] The setted value
     */
    setValue: function(value) {
        if (this.editor && (typeof value !== "undefined") && value !== null) {
            this.editor.setValue(value);
        }

        // Refresh the codemirror field when a value was set
        if(this.editor) {
            this.editor.refresh();
        }
        this.config.value = value;

        return this.callParent(arguments);
    },

    /**
     * Sets the focus into the CodeMirror editor
     *
     * @return void
     */
    focus: function() {
        this.editor.focus();
    },

    /**
     * Loads the passed javascript file. This is necessary
     * to lazy load the different syntax modes.
     *
     * @private
     * @param [string] file - absolute path to the mode source file
     * @return void
     */
    loadJSFile: function(file) {
        var me     = this,
            head   = document.head,
            script = document.createElement('script');

        Ext.apply(script, {
            src  : file,
            type : 'text/javascript',
            onload : Ext.Function.createDelayed(me.handleFileLoad, 100, me, [script]),
            onreadystatechange : function() {
                if (this.readyState === 'loaded' || this.readyState === 'complete') {
                    me.handleFileLoad(script);
                }
            }
        });

        head.appendChild(script);
    },

    /**
     * Registers the loaded syntax mode in
     * the component's scope and initializes
     * the CodeMirror editor.
     *
     * @private
     * @param [object] script - DOM element of the injected "script"-tag
     */
    handleFileLoad: function(script) {
        script.onload = null;
        script.onreadystatechange = null;
        script.onerror = null;

        var me = this,
            loadedModes = me.loadedModes;

        loadedModes.add(Ext.get(script));

        if(!me.isEditorRendered) {
            me.initEditor();
        }
    },

    /**
     * Turns the CodeMirror editor back again to
     * a textarea and destroys the extended
     * textarea component.
     *
     * @public
     * @return void
     */
    destroy: function() {
        if (this.editor) {
            this.editor.toTextArea();
        }
        this.callParent(arguments);
    }
});
<?php }} ?>