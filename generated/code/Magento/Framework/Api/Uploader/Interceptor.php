<?php
namespace Magento\Framework\Api\Uploader;

/**
 * Interceptor class for @see \Magento\Framework\Api\Uploader
 */
class Interceptor extends \Magento\Framework\Api\Uploader implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    public function processFileAttributes($fileAttributes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processFileAttributes');
        if (!$pluginInfo) {
            return parent::processFileAttributes($fileAttributes);
        } else {
            return $this->___callPlugins('processFileAttributes', func_get_args(), $pluginInfo);
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
}
