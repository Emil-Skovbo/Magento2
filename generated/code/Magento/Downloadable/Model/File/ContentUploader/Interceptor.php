<?php
namespace Magento\Downloadable\Model\File\ContentUploader;

/**
 * Interceptor class for @see \Magento\Downloadable\Model\File\ContentUploader
 */
class Interceptor extends \Magento\Downloadable\Model\File\ContentUploader implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\MediaStorage\Helper\File\Storage\Database $coreFileStorageDb, \Magento\MediaStorage\Helper\File\Storage $coreFileStorage, \Magento\MediaStorage\Model\File\Validator\NotProtectedExtension $validator, \Magento\Framework\Filesystem $filesystem, \Magento\Downloadable\Model\Link $linkConfig, \Magento\Downloadable\Model\Sample $sampleConfig)
    {
        $this->___init();
        parent::__construct($coreFileStorageDb, $coreFileStorage, $validator, $filesystem, $linkConfig, $sampleConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function upload(\Magento\Downloadable\Api\Data\File\ContentInterface $fileContent, $contentType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'upload');
        if (!$pluginInfo) {
            return parent::upload($fileContent, $contentType);
        } else {
            return $this->___callPlugins('upload', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function skipDbProcessing($flag = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'skipDbProcessing');
        if (!$pluginInfo) {
            return parent::skipDbProcessing($flag);
        } else {
            return $this->___callPlugins('skipDbProcessing', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function checkAllowedExtension($extension)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkAllowedExtension');
        if (!$pluginInfo) {
            return parent::checkAllowedExtension($extension);
        } else {
            return $this->___callPlugins('checkAllowedExtension', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFileSize()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFileSize');
        if (!$pluginInfo) {
            return parent::getFileSize();
        } else {
            return $this->___callPlugins('getFileSize', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function validateFile()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateFile');
        if (!$pluginInfo) {
            return parent::validateFile();
        } else {
            return $this->___callPlugins('validateFile', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function save($destinationFolder, $newFileName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        if (!$pluginInfo) {
            return parent::save($destinationFolder, $newFileName);
        } else {
            return $this->___callPlugins('save', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFileExtension()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFileExtension');
        if (!$pluginInfo) {
            return parent::getFileExtension();
        } else {
            return $this->___callPlugins('getFileExtension', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addValidateCallback($callbackName, $callbackObject, $callbackMethod)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addValidateCallback');
        if (!$pluginInfo) {
            return parent::addValidateCallback($callbackName, $callbackObject, $callbackMethod);
        } else {
            return $this->___callPlugins('addValidateCallback', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeValidateCallback($callbackName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeValidateCallback');
        if (!$pluginInfo) {
            return parent::removeValidateCallback($callbackName);
        } else {
            return $this->___callPlugins('removeValidateCallback', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function correctFileNameCase($fileName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'correctFileNameCase');
        if (!$pluginInfo) {
            return parent::correctFileNameCase($fileName);
        } else {
            return $this->___callPlugins('correctFileNameCase', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function checkMimeType($validTypes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkMimeType');
        if (!$pluginInfo) {
            return parent::checkMimeType($validTypes);
        } else {
            return $this->___callPlugins('checkMimeType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUploadedFileName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUploadedFileName');
        if (!$pluginInfo) {
            return parent::getUploadedFileName();
        } else {
            return $this->___callPlugins('getUploadedFileName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAllowCreateFolders($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAllowCreateFolders');
        if (!$pluginInfo) {
            return parent::setAllowCreateFolders($flag);
        } else {
            return $this->___callPlugins('setAllowCreateFolders', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAllowRenameFiles($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAllowRenameFiles');
        if (!$pluginInfo) {
            return parent::setAllowRenameFiles($flag);
        } else {
            return $this->___callPlugins('setAllowRenameFiles', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setFilesDispersion($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFilesDispersion');
        if (!$pluginInfo) {
            return parent::setFilesDispersion($flag);
        } else {
            return $this->___callPlugins('setFilesDispersion', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setFilenamesCaseSensitivity($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFilenamesCaseSensitivity');
        if (!$pluginInfo) {
            return parent::setFilenamesCaseSensitivity($flag);
        } else {
            return $this->___callPlugins('setFilenamesCaseSensitivity', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAllowedExtensions($extensions = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAllowedExtensions');
        if (!$pluginInfo) {
            return parent::setAllowedExtensions($extensions);
        } else {
            return $this->___callPlugins('setAllowedExtensions', func_get_args(), $pluginInfo);
        }
    }
}
