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
 * Link for frontend
 *
 * @category   Oggetto
 * @package    Oggetto_DesignSwitcher
 * @subpackage Block
 * @author     Sergei Waribrus <svaribrus@oggettoweb.com>
 */

class Oggetto_DesignSwitcher_Block_Link extends Mage_Core_Block_Template
{
    /**
     * Get url for switcher
     *
     * @return string
     */
    public function getMobileToDesktopUrl()
    {
        return Mage::helper('oggetto_designswitcher')->getMobileToDesktopUrl();
    }

    /**
     * Get title for link switcher
     *
     * @return string
     */
    public function getMobielToDesktopTitle()
    {
        return $this->__('View Desktop Site');
    }

    /**
     * Get url for switcher
     *
     * @return string
     */
    public function getDesktopToMobileUrl()
    {
        return Mage::helper('oggetto_designswitcher')->getDesktopToMobileUrl();
    }

    /**
     * Get title for link switcher
     *
     * @return string
     */
    public function getDesktopToMobileTitle()
    {
        return $this->__('View Mobile Site');
    }

    /**
     * Permission to change the design
     *
     * @return bool
     */
    public function isDesktopToMobile()
    {
        if (isset($_COOKIE[Oggetto_DesignSwitcher_Helper_Data::FULL_SITE_COOKIE])) {
            return true;
        }
        return false;
    }
}