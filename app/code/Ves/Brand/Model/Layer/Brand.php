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
namespace Ves\Brand\Model\Layer;

use Magento\Catalog\Api\CategoryRepositoryInterface;
use Magento\Catalog\Model\Resource;

class Brand extends \Magento\Catalog\Model\Layer
{
    /**
     * Retrieve current layer product collection
     *
     * @return \Magento\Catalog\Model\ResourceModel\Product\Collection
     */
    public function getProductCollection()
    {
    	$brand = $this->getCurrentBrand();
    	if(isset($this->_productCollections[$brand->getId()])){
    		$collection = $this->_productCollections;
    	}else{
    		$collection = $brand->getProductCollection();
    		$this->prepareProductCollection($collection);
            $this->_productCollections[$brand->getId()] = $collection;
    	} 
    	return $collection;
    }

    /**
     * Retrieve current category model
     * If no category found in registry, the root will be taken
     *
     * @return \Magento\Catalog\Model\Category
     */
    public function getCurrentBrand()
    {
    	$brand = $this->getData('current_brand');
    	if ($brand === null) {
    		$brand = $this->registry->registry('current_brand');
    		if ($brand) {
    			$this->setData('current_brand', $brand);
    		}
    	}
    	return $brand;
    }
}