<?php
/**
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

namespace Shopware\Recovery\Install\Struct;

/**
 * @category  Shopware
 * @package   Shopware\Recovery\Install\Struct
 * @copyright Copyright (c) shopware AG (http://www.shopware.de)
 */
class LicenseInformation extends Struct
{
    /**
     * @var string e.G "Shopware Enterprise Cluster"
     */
    public $label;

    /**
     * @var string e.G "SwagCommercial"
     */
    public $module;

    /**
     * @var string e.g EC @see: ShopwareEdition::$validEditions
     */
    public $product;

    /**
     * @var string e.G sth.test.shopware.in
     */
    public $host;

    /**
     * @var int e.g 1/2/3
     */
    public $type;

    /**
     * @var string License-Key
     */
    public $license;
}
