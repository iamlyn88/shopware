<?php /* Smarty version Smarty-3.1.12, created on 2016-07-11 12:43:06
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-five/shopware/engine/Library/ExtJs/overrides/Ext.form.field.Time.js" */ ?>
<?php /*%%SmartyHeaderCode:1526782265783783aa32741-42464162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ad43fafd911abf35a61e7ab57f0ff56109335d6' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-five/shopware/engine/Library/ExtJs/overrides/Ext.form.field.Time.js',
      1 => 1463971428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1526782265783783aa32741-42464162',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5783783aa42914_09226710',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5783783aa42914_09226710')) {function content_5783783aa42914_09226710($_smarty_tpl) {?>/**
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
 * Shopware UI - Time field Override
 *
 * Extends the default safeParse function to allow
 * parsing partial times using the alternative formats
 */
Ext.override(Ext.form.field.Time,
/** @lends Ext.form.field.Time */
{
    /** Extends the default function to allow parsing partial times using the alternative formats. */
    safeParse: function(value, format){
        var me = this,
            utilDate = Ext.Date,
            parsedDate,
            result = null,
            altFormats = me.altFormats,
            altFormatsArray = me.altFormatsArray,
            j = 0,
            len;

        if (utilDate.formatContainsDateInfo(format)) {
            // assume we've been given a full date
            result = utilDate.parse(value, format);
        } else {
            // Use our initial safe date
            parsedDate = utilDate.parse(me.initDate + ' ' + value, me.initDateFormat + ' ' + format);
            if (parsedDate) {
                result = parsedDate;
            } else {
                if (!result && altFormats) {
                    altFormatsArray = altFormatsArray || altFormats.split('|');
                    len = altFormatsArray.length;
                    for (; j < len && !result; ++j) {
                        parsedDate = utilDate.parse(me.initDate + ' ' + value, me.initDateFormat + ' ' + altFormatsArray[j]);
                        if (parsedDate) {
                            result = parsedDate;
                        }
                    }
                }
            }
        }
        return result;
    }
});
<?php }} ?>