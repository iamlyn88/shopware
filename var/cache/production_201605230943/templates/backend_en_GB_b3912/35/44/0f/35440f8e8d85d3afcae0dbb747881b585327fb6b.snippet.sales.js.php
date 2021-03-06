<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:10
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/index/view/widgets/sales.js" */ ?>
<?php /*%%SmartyHeaderCode:13298729295783783e8dd698-07797499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35440f8e8d85d3afcae0dbb747881b585327fb6b' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/index/view/widgets/sales.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13298729295783783e8dd698-07797499',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5783783e956da3_03853979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5783783e956da3_03853979')) {function content_5783783e956da3_03853979($_smarty_tpl) {?>/**
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

//

/**
 * Shopware UI - Sales Widget
 *
 * This file holds off the sales widget.
 */
//
Ext.define('Shopware.apps.Index.view.widgets.Sales', {
    extend: 'Shopware.apps.Index.view.widgets.Base',
    alias: 'widget.swag-sales-widget',
    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'sales'/'title','default'=>'Turnover today / yesterday (Sample Data)','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'sales'/'title','default'=>'Turnover today / yesterday (Sample Data)','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Turnover today / yesterday<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'sales'/'title','default'=>'Turnover today / yesterday (Sample Data)','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    layout: {
        type: 'vbox',
        align: 'stretch',
        pack: 'start'
    },

    /**
     * Snippets for this widget.
     * @object
     */
    snippets: {
        conversation_rate: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'sales'/'conversation_rate','default'=>'Conversation rate','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'sales'/'conversation_rate','default'=>'Conversation rate','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Conversion rate (last 7 days)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'sales'/'conversation_rate','default'=>'Conversation rate','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        headers: {
            turnover: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'sales'/'headers'/'turnover','default'=>'Turnover','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'sales'/'headers'/'turnover','default'=>'Turnover','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Turnover<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'sales'/'headers'/'turnover','default'=>'Turnover','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            orders: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"sales/headers/orders",'default'=>'Orders','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"sales/headers/orders",'default'=>'Orders','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Orders<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"sales/headers/orders",'default'=>'Orders','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            new_customers: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"sales/headers/new_customers",'default'=>'New Customers','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"sales/headers/new_customers",'default'=>'New Customers','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
New Customers<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"sales/headers/new_customers",'default'=>'New Customers','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            visitors: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"sales/headers/visitors",'default'=>'Visitors','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"sales/headers/visitors",'default'=>'Visitors','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Visitors<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"sales/headers/visitors",'default'=>'Visitors','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }
    },

    turnoverStore: null,

    height: 340,

    /**
     * Initializes the widget.
     *
     * @public
     * @return void
     */
    initComponent: function () {
        var me = this;

        me.items = [];

        me.tools = [
            {
                type: 'refresh',
                scope: me,
                handler: me.refreshView
            }
        ];

        me.turnoverStore = Ext.create('Ext.data.Store', {
            model: 'Shopware.apps.Index.model.Turnover',
            remoteFilter: true,
            clearOnLoad: false,

            proxy: {
                type: 'ajax',
                url: '<?php echo '/backend/widgets/getTurnOverVisitors';?>',
                reader: {
                    type: 'json',
                    root: 'data'
                }
            }
        });

        me.turnoverStore.load({
            callback: function () {
                me.add(me.createUpperContainer());
                me.add(me.createLowerContainer());

                me.createTaskRunner();
            }
        });

        me.callParent(arguments);
    },

    /**
     * Registers a new task runner to refresh
     * the store after a given time interval.
     *
     * @public
     * @return void
     */
    createTaskRunner: function () {
        var me = this;

        me.storeRefreshTask = Ext.TaskManager.start({
            scope: me,
            run: me.refreshView,
            interval: 300000
        });
    },

    /**
     * Helper method which will be called by the
     * task runner and when the user clicks the
     * refresh icon in the panel header.
     *
     * @public
     * @return void
     */
    refreshView: function () {
        var me = this,
            reader;

        if (!me.turnoverStore) {
            return;
        }

        reader = me.turnoverStore.getProxy().getReader();

        me.turnoverStore.load({
            callback: function () {
                me.dataView.update([
                    {
                        conversationRate: reader.jsonData.conversion
                    }
                ]);
            }
        });
    },

    /***
     * Creates the upper container which holds the chart
     * and the data view which displays the conversation rate.
     *
     * @public
     * @return [object] Ext.container.Container
     */
    createUpperContainer: function () {
        var me = this,
            reader = me.turnoverStore.getProxy().getReader();

        me.chart = me.createBarChart();

        me.dataView = Ext.create('Ext.view.View', {
            tpl: me.createConversationRateTemplate(),
            data: [
                {
                    conversationRate: reader.jsonData.conversion
                }
            ],
            columnWidth: 0.5
        });

        return Ext.create('Ext.container.Container', {
            layout: 'column',
            flex: 3,
            items: [
                {
                    xtype: 'container',
                    columnWidth: 0.5,
                    items: [ me.chart ]
                },
                me.dataView
            ]
        });
    },

    /**
     * Helper method which creates the template
     * for the conversation rate data view.
     *
     * Note that the template contains a member function
     * which calculated the conversation rate.
     *
     * @public
     * @return { object } Ext.XTemplate
     */
    createConversationRateTemplate: function () {
        var me = this;

        return new Ext.XTemplate(
            '',
            '<tpl for=".">',
                '<div class="conversation-rate">',
                    '<strong class="title">' + me.snippets.conversation_rate + ':</strong>',
                    '<span class="rate">{conversationRate}%</span>',
                '</div>',
            '</tpl>',
            ''
        );
    },

    /**
     * Creates the bar chart based on the passed store.
     *
     * @public
     * @param [object] store - Ext.data.JsonStore
     * @return [object] chart - Ext.chart.Chart
     */
    createBarChart: function () {
        var me = this;

        return Ext.create('Ext.chart.Chart', {
            xtype: 'chart',
            theme: 'Widget',
            height: 110,
            listeners: {
                /**
                 * Event listener method which will be fired when the
                 * chart is rendered successfully.
                 *
                 * The method gets the width of the overlying container
                 * to propertly set the width of the chart.
                 *
                 * @public
                 * @event afterrender
                 * @param [object] chartCmp - Ext.chart.Chart
                 */
                afterrender: function (chartCmp) {
                    Ext.defer(function () {
                        chartCmp.setWidth(chartCmp.ownerCt.getWidth());
                    }, 50);
                }
            },
            animate: true,
            store: me.turnoverStore,
            axes: [
                {
                    type: 'Category',
                    hideTitle: true,
                    grid: false,
                    position: 'left',
                    fields: [ 'name' ],
                    label: {
                        fill: '#ffffff',
                        font: '12px/14px Arial, sans-serif',
                        align: 'left'
                    }
                },
                {
                    type: 'Numeric',
                    position: 'bottom',
                    hidden: true,
                    grid: false,
                    minimum: 0,
                    fields: [ 'turnover' ]
                }
            ],
            series: [
                {
                    type: 'bar',
                    axis: 'bottom',
                    highlight: false,
                    xField: 'name',
                    yField: [ 'turnover' ],

                    onCreateLabel: function (storeItem, item, i) {
                        var me = this,
                            surface = me.chart.surface,
                            group = me.labelsGroup,
                            config = me.label,
                            endLabelStyle = Ext.apply({}, config, me.seriesLabelStyle || {});

                        return surface.add(Ext.apply({
                            type: 'text',
                            group: group
                        }, endLabelStyle || {}));
                    },

                    // Label
                    label: {
                        display: 'insideEnd',
                        orientation: 'horizontal',
                        field: 'turnover',
                        fill: '#FFFFFF',
                        font: 'bold 12px/16px Arial, sans-serif',
                        'text-anchor': 'middle'
                    },

                    // Color renderer
                    renderer: function (sprite, record, attr, index) {
                        return Ext.apply(attr, {
                            fill: (index % 2) ? '#13c6a2' : '#2edc79'
                        });
                    }
                }
            ]
        });
    },

    /**
     * Creates the lower container of the widget. The lower container
     * is a grid panel which contains two records.
     *
     * @public
     * @return [object] Ext.grid.Panel
     */
    createLowerContainer: function () {
        var me = this;

        return Ext.create('Ext.grid.Panel', {
            flex: 2,
            border: 0,
            maxHeight: 75,
            stripeRows: false,
            columns: me.createColumns(),
            store: me.turnoverStore,
            viewConfig: {
                hideLoadingMsg: true
            }
        })
    },

    /**
     * Helper method which creates the columns
     * for the grid panel.
     *
     * @return [array] generated columns
     */
    createColumns: function () {
        var me = this;

        return [
            {
                dataIndex: 'name',
                align: 'left',
                flex: 1
            },
            {
                header: me.snippets.headers.turnover,
                dataIndex: 'turnover',
                align: 'right',
                flex: 1
            },
            {
                header: me.snippets.headers.orders,
                align: 'right',
                dataIndex: 'orders',
                flex: 1
            },
            {
                header: me.snippets.headers.new_customers,
                align: 'right',
                dataIndex: 'newCustomers',
                flex: 1
            },
            {
                header: me.snippets.headers.visitors,
                align: 'right',
                dataIndex: 'visitors',
                flex: 1
            }
        ];
    }
});
//
<?php }} ?>