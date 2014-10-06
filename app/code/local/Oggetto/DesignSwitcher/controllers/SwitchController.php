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
 * the Oggetto DesignSwitcher module to newer versions in the future.
 * If you wish to customize the DesignSwitcher for your needs
 * please refer to http://www.magentocommerce.com for more information.
 *
 * @category   Oggetto
 * @package    Oggetto_DesignSwitcher
 * @copyright  Copyright (C) 2014 Oggetto Web ltd (http://oggettoweb.com/)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
 
/**
 * Controller change theme
 *
 * @category   Oggetto
 * @package    Oggetto_DesignSwitcher
 * @subpackage Controller
 * @author     Sergei Waribrus <svaribrus@oggettoweb.com>
 */

class Oggetto_DesignSwitcher_SwitchController extends Mage_Core_Controller_Front_Action
{
    /**
     * Switch to Desktop theme
     *
     * @return void
     */
    public function desktopAction()
    {
        Mage::app()->getCookie()->set(Oggetto_DesignSwitcher_Helper_Data::FULL_SITE_COOKIE, 1);
        $this->_redirectReferer();
    }

    /**
     * Revert to Mobile theme
     *
     * @return void
     */
    public function mobileAction()
    {
        Mage::app()->getCookie()->set(Oggetto_DesignSwitcher_Helper_Data::FULL_SITE_COOKIE, 0);
        $this->_redirectReferer();
    }
}
