<?php
/**
 * Oggetto Web extension for Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade
 * the Oggetto Module DesignSwitcher to newer versions in the future.
 * If you wish to customize the DesignSwitcher module for your needs
 * please refer to http://www.magentocommerce.com for more information.
 *
 * @category   Oggetto
 * @package    Oggetto_DesignSwitcher
 * @copyright  Copyright (C) 2014 Oggetto Web ltd (http://oggettoweb.com/)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
 
/**
 * Enter some description...
 *
 * @category   Oggetto
 * @package    Oggetto_DesignSwitcher
 * @subpackage Model
 * @author     Sergei Waribrus <svaribrus@oggettoweb.com>
 */

class Oggetto_DesignSwitcher_Model_Pagecache_Processor extends Enterprise_PageCache_Model_Processor
{
    /**
     * Get currently configured design package and check the cookie
     * to determine if design exceptions should be cleared
     *
     * @return string|bool
     * @see Enterprise_PageCache_Model_Processor
     */
    protected function _getDesignPackage()
    {
        $keysString = parent::_getDesignPackage();
        $keys = explode("|", $keysString);

        $ignoreException = null;
        if (isset($_COOKIE[Oggetto_DesignSwitcher_Helper_Data::FULL_SITE_COOKIE])) {
            $ignoreException = $_COOKIE[Oggetto_DesignSwitcher_Helper_Data::FULL_SITE_COOKIE];
        }

        if ($ignoreException) {
            foreach ($keys as $key => $value) {
                $keys[$key] = '';
            }
        }
        return implode($keys, "|");
    }
}
