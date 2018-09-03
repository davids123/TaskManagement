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
 * @package    Ves_Setup
 * @copyright  Copyright (c) 2014 mitash (https://www.mitash.com/)
 * @license    https://www.mitash.com/LICENSE-1.0.html
 */
namespace Ves\Setup\Model\System\Config\Source\Export;

class Widgets implements \Magento\Framework\Option\ArrayInterface
{
	protected  $_widgetModel;

    /**
     * @param \Magento\Cms\Model\Page $widgetModel
     */
    public function __construct(
    	\Magento\Widget\Model\Widget\Instance $widgetModel
    	) {
    	$this->_widgetModel = $widgetModel;
    }

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
    	$collection = $this->_widgetModel->getCollection();
    	$blocks = array();
    	foreach ($collection as $_widget) {
    		$blocks[] = [
    		'value' => $_widget->getId(),
    		'label' => addslashes($_widget->getTitle())
    		];
    	}
        return $blocks;
    }

    /**
     * Options getter
     *
     * @return array
     */
    public function toArray()
    {
        $collection = $this->_widgetModel->getCollection();
        $blocks = array();
        foreach ($collection as $_widget) {
            $blocks[$_widget->getId()] = addslashes($_widget->getTitle());
        }
        return $blocks;
    }
}