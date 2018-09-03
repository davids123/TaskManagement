<?php
/**
 * mitash
 * 
 * NOTICE OF LICENSE
 * 
 * This source file is subject to the mitash.com license that is
 * available through the world-wide-web at this URL:
 * http://mitash.com/license
 * 
 * DISCLAIMER
 * 
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 * 
 * @category   mitash
 * @package    Ves_All
 * @copyright  Copyright (c) 2017 Landofcoder (https://www.mitash.com/)
 * @license    https://www.mitash.com/LICENSE-1.0.html
 */

namespace Ves\All\Model\ResourceModel\License;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Ves\All\Model\License', 'Ves\All\Model\ResourceModel\License');
    }
}
