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
namespace Ves\Brand\Model\Source;

class Carousellayout implements \Magento\Framework\Option\ArrayInterface
{
    protected  $_group;
    
    /**
     * 
     * @param \Ves\Brand\Model\Group $group
     */
    public function __construct(
        \Ves\Brand\Model\Group $group
        ) {
        $this->_group = $group;
    }

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {   
        $groupList = array();
        $groupList[] = array(
            'label' => __('Owl Carousel'),
            'value' => 'owl_carousel'
            );
        
        $groupList[] = array(
            'label' => __('Bootstrap Carousel'),
            'value' => 'bootstrap_carousel'
            );
        return $groupList;
    }
}
