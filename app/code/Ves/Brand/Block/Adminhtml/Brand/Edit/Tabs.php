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
namespace Ves\Brand\Block\Adminhtml\Brand\Edit;

/**
 * Admin page left menu
 */
class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('page_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Task Information'));
    }

    /**
     * @return $this
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    protected function _prepareLayout()
    {
        $this->addTab(
                'general',
                [
                    'label' => __('Add Task '),
                    'content' => $this->getLayout()->createBlock('Ves\Brand\Block\Adminhtml\Brand\Edit\Tab\Main')->toHtml()
                ]
            );

        // $this->addTab(
        //         'products',
        //         [
        //             'label' => __('Products'),
        //             'url' => $this->getUrl('vesbrand/*/products', ['_current' => true]),
        //             'class' => 'ajax'
        //         ]
        //     );

        // $this->addTab(
        //         'design',
        //         [
        //             'label' => __('Design'),
        //             'content' => $this->getLayout()->createBlock('Ves\Brand\Block\Adminhtml\Brand\Edit\Tab\Design')->toHtml()
        //         ]
        //     );

        // $this->addTab(
        //         'meta',
        //         [
        //             'label' => __('Meta Data'),
        //             'content' => $this->getLayout()->createBlock('Ves\Brand\Block\Adminhtml\Brand\Edit\Tab\Meta')->toHtml()
        //         ]
        //     );
    }
}
