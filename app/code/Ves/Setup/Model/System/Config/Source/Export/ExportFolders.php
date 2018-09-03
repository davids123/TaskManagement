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
use Magento\Framework\App\Filesystem\DirectoryList;

class ExportFolders implements \Magento\Framework\Option\ArrayInterface
{
	protected  $_blockModel;

    /**
     * @var \Magento\Theme\Model\Theme
     */
    protected $_collectionThemeFactory;

    /**
     * File system
     *
     * @var \Magento\Framework\Filesystem
     */
    protected $_filesystem;

    /**
     * @param \Magento\Cms\Model\Block $blockModel
     */
    public function __construct(
    	\Magento\Theme\Model\ResourceModel\Theme\CollectionFactory $collectionThemeFactory,
        \Magento\Framework\Filesystem $filesystem
        ) {
    	$this->_collectionThemeFactory = $collectionThemeFactory;
        $this->_filesystem = $filesystem;
    }

    public function toOptionArray(){
        $themes = $this->_collectionThemeFactory->create();
        $file = $this->_filesystem->getDirectoryRead(DirectoryList::APP)->getAbsolutePath('design/frontend/');
        $vesPackagePaths = glob($file . '*/*/config.xml');
        $output = [];
        foreach ($vesPackagePaths as $k => $v) {
            $v = str_replace("/config.xml", "", $v);
            $output[] = [
                'label' => ucfirst(str_replace($file, "", $v)),
                'value' => str_replace($file, "", $v)
                ];
        }
        return $output;
    }

    public function toArray(){
        $themes = $this->_collectionThemeFactory->create();
        $file = $this->_filesystem->getDirectoryRead(DirectoryList::APP)->getAbsolutePath('design/frontend/');
        $vesPackagePaths = glob($file . '*/*/config.xml');
        $output = [];
        foreach ($vesPackagePaths as $k => $v) {
            $v = str_replace("/config.xml", "", $v);
            $output[str_replace($file, "", $v)] = ucfirst(str_replace($file, "", $v));
        }
        return $output;
    }
}