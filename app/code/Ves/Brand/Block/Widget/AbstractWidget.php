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
namespace Ves\Brand\Block\Widget;

class AbstractWidget extends \Magento\Framework\View\Element\Template implements \Magento\Widget\Block\BlockInterface
{
	/**
	 * @var \Ves\Brand\Helper\Data
	 */
	protected $_brandHelper;

	/**
     * @param \Magento\Framework\View\Element\Template\Context $context     
     * @param \Ves\Brand\Helper\Data                           $brandHelper 
     * @param array                                            $data        
     */
	public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Ves\Brand\Helper\Data $brandHelper,
        array $data = []
        ) {
        $this->_brandHelper = $brandHelper;
        parent::__construct($context, $data);
    }

    public function getConfig($key, $default = '')
    {
        if($this->hasData($key))
        {
            return $this->getData($key);
        }
        return $default;
    }
}