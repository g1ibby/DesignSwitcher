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
 * Helper get url change
 *
 * @category   Oggetto
 * @package    Oggetto_DesignSwitcher
 * @subpackage Helper
 * @author     Sergei Waribrus <svaribrus@oggettoweb.com>
 */

class Oggetto_DesignSwitcher_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Name cookie
     *
     * @type string
     */
    const FULL_SITE_COOKIE = 'USE_FULL_SITE';

    /**
     * Get url desktop version site
     *
     * @return string
     */
    public function getMobileToDesktopUrl()
    {
        return $this->_getUrl('designswitcher/switch/desktop');
    }

    /**
     * Get url mobile version site
     *
     * @return string
     */
    public function getDesktopToMobileUrl()
    {
        return $this->_getUrl('designswitcher/switch/mobile');
    }
}