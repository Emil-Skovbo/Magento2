<?php
namespace Magento\Catalog\Model\Product\Gallery\Processor;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product\Gallery\Processor
 */
class Interceptor extends \Magento\Catalog\Model\Product\Gallery\Processor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Api\ProductAttributeRepositoryInterface $attributeRepository, \Magento\MediaStorage\Helper\File\Storage\Database $fileStorageDb, \Magento\Catalog\Model\Product\Media\Config $mediaConfig, \Magento\Framework\Filesystem $filesystem, \Magento\Catalog\Model\ResourceModel\Product\Gallery $resourceModel, ?\Magento\Framework\File\Mime $mime = null)
    {
        $this->___init();
        parent::__construct($attributeRepository, $fileStorageDb, $mediaConfig, $filesystem, $resourceModel, $mime);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttribute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttribute');
        if (!$pluginInfo) {
            return parent::getAttribute();
        } else {
            return $this->___callPlugins('getAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function validate($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        if (!$pluginInfo) {
            return parent::validate($object);
        } else {
            return $this->___callPlugins('validate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addImage(\Magento\Catalog\Model\Product $product, $file, $mediaAttribute = null, $move = false, $exclude = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addImage');
        if (!$pluginInfo) {
            return parent::addImage($product, $file, $mediaAttribute, $move, $exclude);
        } else {
            return $this->___callPlugins('addImage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function updateImage(\Magento\Catalog\Model\Product $product, $file, $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateImage');
        if (!$pluginInfo) {
            return parent::updateImage($product, $file, $data);
        } else {
            return $this->___callPlugins('updateImage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeImage(\Magento\Catalog\Model\Product $product, $file)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeImage');
        if (!$pluginInfo) {
            return parent::removeImage($product, $file);
        } else {
            return $this->___callPlugins('removeImage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImage(\Magento\Catalog\Model\Product $product, $file)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        if (!$pluginInfo) {
            return parent::getImage($product, $file);
        } else {
            return $this->___callPlugins('getImage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function clearMediaAttribute(\Magento\Catalog\Model\Product $product, $mediaAttribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearMediaAttribute');
        if (!$pluginInfo) {
            return parent::clearMediaAttribute($product, $mediaAttribute);
        } else {
            return $this->___callPlugins('clearMediaAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setMediaAttribute(\Magento\Catalog\Model\Product $product, $mediaAttribute, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMediaAttribute');
        if (!$pluginInfo) {
            return parent::setMediaAttribute($product, $mediaAttribute, $value);
        } else {
            return $this->___callPlugins('setMediaAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMediaAttributeCodes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMediaAttributeCodes');
        if (!$pluginInfo) {
            return parent::getMediaAttributeCodes();
        } else {
            return $this->___callPlugins('getMediaAttributeCodes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function duplicateImageFromTmp($file)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'duplicateImageFromTmp');
        if (!$pluginInfo) {
            return parent::duplicateImageFromTmp($file);
        } else {
            return $this->___callPlugins('duplicateImageFromTmp', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAffectedFields($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAffectedFields');
        if (!$pluginInfo) {
            return parent::getAffectedFields($object);
        } else {
            return $this->___callPlugins('getAffectedFields', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isScalar()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isScalar');
        if (!$pluginInfo) {
            return parent::isScalar();
        } else {
            return $this->___callPlugins('isScalar', func_get_args(), $pluginInfo);
        }
    }
}
