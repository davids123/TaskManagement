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
namespace Ves\Brand\Block\Adminhtml\System\Widget\Form\Renderer;

use Magento\Framework\Data\Form\Element\AbstractElement;

/**
 * Form element default renderer
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Separator extends \Magento\Backend\Block\Template implements \Magento\Framework\Data\Form\Element\Renderer\RendererInterface
{
    public function render(AbstractElement $element)
    {
        $this->_element = $element;
        return $this->toHtml();
    }
}