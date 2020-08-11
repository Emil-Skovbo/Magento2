<?php
namespace Magento\Catalog\Model\ImageUploader;

/**
 * Interceptor class for @see \Magento\Catalog\Model\ImageUploader
 */
class Interceptor extends \Magento\Catalog\Model\ImageUploader implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\MediaStorage\Helper\File\Storage\Database $coreFileStorageDatabase, \Magento\Framework\Filesystem $filesystem, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Psr\Log\LoggerInterface $logger, $baseTmpPath, $basePath, $allowedExtensions, $allowedMimeTypes = [])
    {
        $this->___init();
        parent::__construct($coreFileStorageDatabase, $filesystem, $uploaderFactory, $storeManager, $logger, $baseTmpPath, $basePath, $allowedExtensions, $allowedMimeTypes);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseTmpPath($baseTmpPath)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseTmpPath');
        if (!$pluginInfo) {
            return parent::setBaseTmpPath($baseTmpPath);
        } else {
            return $this->___callPlugins('setBaseTmpPath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setBasePath($basePath)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBasePath');
        if (!$pluginInfo) {
            return parent::setBasePath($basePath);
        } else {
            return $this->___callPlugins('setBasePath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAllowedExtensions($allowedExtensions)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAllowedExtensions');
        if (!$pluginInfo) {
            return parent::setAllowedExtensions($allowedExtensions);
        } else {
            return $this->___callPlugins('setAllowedExtensions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseTmpPath()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseTmpPath');
        if (!$pluginInfo) {
            return parent::getBaseTmpPath();
        } else {
            return $this->___callPlugins('getBaseTmpPath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBasePath()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBasePath');
        if (!$pluginInfo) {
            return parent::getBasePath();
        } else {
            return $this->___callPlugins('getBasePath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAllowedExtensions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllowedExtensions');
        if (!$pluginInfo) {
            return parent::getAllowedExtensions();
        } else {
            return $this->___callPlugins('getAllowedExtensions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFilePath($path, $imageName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFilePath');
        if (!$pluginInfo) {
            return parent::getFilePath($path, $imageName);
        } else {
            return $this->___callPlugins('getFilePath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function moveFileFromTmp($imageName, $returnRelativePath = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'moveFileFromTmp');
        if (!$pluginInfo) {
            return parent::moveFileFromTmp($imageName, $returnRelativePath);
        } else {
            return $this->___callPlugins('moveFileFromTmp', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function saveFileToTmpDir($fileId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveFileToTmpDir');
        if (!$pluginInfo) {
            return parent::saveFileToTmpDir($fileId);
        } else {
            return $this->___callPlugins('saveFileToTmpDir', func_get_args(), $pluginInfo);
        }
    }
}
