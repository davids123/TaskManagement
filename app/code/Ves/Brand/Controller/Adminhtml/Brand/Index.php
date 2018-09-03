<?php
/**
 * mitash
 * 
 * NOTICE OF LICENSE
 * 
 * This source file is subject to the mitash.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mitash.com/license-agreement.html
 * 
 * DISCLAIMER
 * 
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 * 
 * @category   mitash
 * @package    Ves_Brand
 * @copyright  Copyright (c) 2014 mitash (https://www.mitash.com/)
 * @license    https://www.mitash.com/LICENSE-1.0.html
 */
namespace Ves\Brand\Controller\Adminhtml\Brand;

class Index extends \Ves\Brand\Controller\Adminhtml\Brand
{
	/**
     * Check the permission to run it
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Ves_Brand::brand');
    }

	/**
	 * Brand list action
	 *
	 * @return \Magento\Backend\Model\View\Result\Page|\Magento\Backend\Model\View\Result\Forward
	 */
	public function execute()
	{

		$resultPage = $this->resultPageFactory->create();

		/**
		 * Set active menu item
		 */
		$resultPage->setActiveMenu("Ves_Brand::brand");
		$resultPage->getConfig()->getTitle()->prepend(__('Tasks'));

		/**
		 * Add breadcrumb item
		 */
		$resultPage->addBreadcrumb(__('Tasks'),__('Tasks'));
		$resultPage->addBreadcrumb(__('Manage Tasks'),__('Manage Tasks'));

		return $resultPage;
	}
	
}