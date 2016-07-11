<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:07
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/base/model/currency.js" */ ?>
<?php /*%%SmartyHeaderCode:19737990925783783bcc55f0-49540351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8360ef604234e5d7c55c31749ed7465e281bd84e' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/themes/Backend/ExtJs/backend/base/model/currency.js',
      1 => 1463971432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19737990925783783bcc55f0-49540351',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5783783bcde483_71325386',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5783783bcde483_71325386')) {function content_5783783bcde483_71325386($_smarty_tpl) {?>/**
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
 * Shopware UI - Global Stores and Models
 */
//
Ext.define('Shopware.apps.Base.model.Currency', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName: 'Shopware.model.Currency',

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Shopware.data.Model',

    /**
     * unique id
     * @int
     */
    idProperty : 'id',

    /**
     * The fields used for this model
     * @array
     */
    fields: [
		//
        { name : 'id', type : 'int' },
        { name : 'name', type : 'string' },
        { name : 'currency', type : 'string' }
    ]
});
//

<?php }} ?>