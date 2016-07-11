<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:35
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/view/price_group/discount.js" */ ?>
<?php /*%%SmartyHeaderCode:454151885783785796b471-78594751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2c744fcdbcfab3cc2103381e454c01c37ab317d' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/config/view/price_group/discount.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '454151885783785796b471-78594751',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57837857998a72_79963365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57837857998a72_79963365')) {function content_57837857998a72_79963365($_smarty_tpl) {?>//
/**
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Config.view.priceGroup.Discount', {
    extend: 'Shopware.apps.Config.view.base.Property',
    alias: 'widget.config-pricegroup-discount',

    title: 'Discounts',
    name: 'discounts',

    sortableColumns: false,

    getColumns: function() {
        var me = this;

        return [{
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'price_group'/'table'/'start_header','default'=>'Item quantity','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'price_group'/'table'/'start_header','default'=>'Item quantity','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Item quantity<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'price_group'/'table'/'start_header','default'=>'Item quantity','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            dataIndex: 'start',
            align: 'right',
            flex: 1,
            xtype: 'numbercolumn',
            editor: {
                xtype: 'numberfield',
                minValue: 1,
                decimalPrecision: 0
            }
        }, {
            xtype: 'numbercolumn',
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'price_group'/'table'/'basket_header','default'=>'Discount (%)','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'price_group'/'table'/'basket_header','default'=>'Discount (%)','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Discount (%)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'price_group'/'table'/'basket_header','default'=>'Discount (%)','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            dataIndex: 'discount',
            align: 'right',
            flex: 1,
            format: '0,000.00 %',
            editor: {
                xtype: 'numberfield',
                minValue: 0,
                decimalPrecision: 2
            }
        }, me.getActionColumn()];
    },

    getTopBar: function () {
        var me = this,
            topBar = me.callParent();

        me.addButton = Ext.apply(topBar[0],{ disabled:true });

        topBar.push({
            xtype: 'config-element-select',
            flex: 1,
            isPropertyFilter: true,
            editable: false,
            name: 'customerGroupId',
            store: 'base.CustomerGroup',
            emptyText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'price_group'/'table'/'customer_group_empty_text','default'=>'Please select...','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'price_group'/'table'/'customer_group_empty_text','default'=>'Please select...','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please select...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'price_group'/'table'/'customer_group_empty_text','default'=>'Please select...','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        });
        return topBar;
    }
});
//<?php }} ?>