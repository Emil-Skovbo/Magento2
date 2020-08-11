<?php
namespace Magento\MediaGallerySynchronization\Model\SynchronizeFiles;

/**
 * Interceptor class for @see \Magento\MediaGallerySynchronization\Model\SynchronizeFiles
 */
class Interceptor extends \Magento\MediaGallerySynchronization\Model\SynchronizeFiles implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Filesystem\Driver\File $driver, \Magento\Framework\Filesystem $filesystem, \Magento\MediaGalleryApi\Api\GetAssetsByPathsInterface $getAssetsByPaths, \Magento\MediaGallerySynchronization\Model\CreateAssetFromFile $createAssetFromFile, \Magento\MediaGalleryApi\Api\SaveAssetsInterface $saveAsset, \Psr\Log\LoggerInterface $log)
    {
        $this->___init();
        parent::__construct($driver, $filesystem, $getAssetsByPaths, $createAssetFromFile, $saveAsset, $log);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(array $files) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        if (!$pluginInfo) {
            parent::execute($files);
        } else {
            $this->___callPlugins('execute', func_get_args(), $pluginInfo);
        }
    }
}
