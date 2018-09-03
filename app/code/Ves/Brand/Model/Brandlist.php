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
namespace Ves\Brand\Model;

class Brandlist extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    protected  $_brand;
    
    /**
     * 
     * @param \Ves\Brand\Model\Brand $brand
     */
    public function __construct(
        \Ves\Brand\Model\Brand $brand
        ) {
        $this->_brand = $brand;
    }
    
    
    /**
     * Get Gift Card available templates
     *
     * @return array
     */
    public function getAvailableTemplate()
    {
        $brands = $this->_brand->getCollection()
        ->addFieldToFilter('status', '1');
        $listBrand = array();
        foreach ($brands as $brand) {
            $listBrand[] = array('label' => $brand->getName(),
                'value' => $brand->getId());
        }
        return $listBrand;
    }

    /**
     * Get model option as array
     *
     * @return array
     */
    public function getAllOptions($withEmpty = true)
    {
        $options = array();
        $options = $this->getAvailableTemplate();

        if ($withEmpty) {
            array_unshift($options, array(
                'value' => '',
                'label' => '-- Please Select --',
                ));
        }
        return $options;
    }
}