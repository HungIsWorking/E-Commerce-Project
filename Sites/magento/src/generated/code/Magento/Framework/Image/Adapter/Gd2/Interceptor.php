<?php
namespace Magento\Framework\Image\Adapter\Gd2;

/**
 * Interceptor class for @see \Magento\Framework\Image\Adapter\Gd2
 */
class Interceptor extends \Magento\Framework\Image\Adapter\Gd2 implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Filesystem $filesystem, \Psr\Log\LoggerInterface $logger, array $data = [])
    {
        $this->___init();
        parent::__construct($filesystem, $logger, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function open($filename)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'open');
        return $pluginInfo ? $this->___callPlugins('open', func_get_args(), $pluginInfo) : parent::open($filename);
    }

    /**
     * {@inheritdoc}
     */
    public function save($destination = null, $newName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($destination, $newName);
    }

    /**
     * {@inheritdoc}
     */
    public function getImage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        return $pluginInfo ? $this->___callPlugins('getImage', func_get_args(), $pluginInfo) : parent::getImage();
    }

    /**
     * {@inheritdoc}
     */
    public function checkAlpha($fileName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkAlpha');
        return $pluginInfo ? $this->___callPlugins('checkAlpha', func_get_args(), $pluginInfo) : parent::checkAlpha($fileName);
    }

    /**
     * {@inheritdoc}
     */
    public function resize($frameWidth = null, $frameHeight = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resize');
        return $pluginInfo ? $this->___callPlugins('resize', func_get_args(), $pluginInfo) : parent::resize($frameWidth, $frameHeight);
    }

    /**
     * {@inheritdoc}
     */
    public function rotate($angle)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'rotate');
        return $pluginInfo ? $this->___callPlugins('rotate', func_get_args(), $pluginInfo) : parent::rotate($angle);
    }

    /**
     * {@inheritdoc}
     */
    public function watermark($imagePath, $positionX = 0, $positionY = 0, $opacity = 30, $tile = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'watermark');
        return $pluginInfo ? $this->___callPlugins('watermark', func_get_args(), $pluginInfo) : parent::watermark($imagePath, $positionX, $positionY, $opacity, $tile);
    }

    /**
     * {@inheritdoc}
     */
    public function crop($top = 0, $left = 0, $right = 0, $bottom = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'crop');
        return $pluginInfo ? $this->___callPlugins('crop', func_get_args(), $pluginInfo) : parent::crop($top, $left, $right, $bottom);
    }

    /**
     * {@inheritdoc}
     */
    public function checkDependencies()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkDependencies');
        return $pluginInfo ? $this->___callPlugins('checkDependencies', func_get_args(), $pluginInfo) : parent::checkDependencies();
    }

    /**
     * {@inheritdoc}
     */
    public function refreshImageDimensions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'refreshImageDimensions');
        return $pluginInfo ? $this->___callPlugins('refreshImageDimensions', func_get_args(), $pluginInfo) : parent::refreshImageDimensions();
    }

    /**
     * {@inheritdoc}
     */
    public function getColorAt($x, $y)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getColorAt');
        return $pluginInfo ? $this->___callPlugins('getColorAt', func_get_args(), $pluginInfo) : parent::getColorAt($x, $y);
    }

    /**
     * {@inheritdoc}
     */
    public function createPngFromString($text, $font = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createPngFromString');
        return $pluginInfo ? $this->___callPlugins('createPngFromString', func_get_args(), $pluginInfo) : parent::createPngFromString($text, $font);
    }

    /**
     * {@inheritdoc}
     */
    public function getMimeType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMimeType');
        return $pluginInfo ? $this->___callPlugins('getMimeType', func_get_args(), $pluginInfo) : parent::getMimeType();
    }

    /**
     * {@inheritdoc}
     */
    public function getImageType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImageType');
        return $pluginInfo ? $this->___callPlugins('getImageType', func_get_args(), $pluginInfo) : parent::getImageType();
    }

    /**
     * {@inheritdoc}
     */
    public function getOriginalWidth()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOriginalWidth');
        return $pluginInfo ? $this->___callPlugins('getOriginalWidth', func_get_args(), $pluginInfo) : parent::getOriginalWidth();
    }

    /**
     * {@inheritdoc}
     */
    public function getOriginalHeight()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOriginalHeight');
        return $pluginInfo ? $this->___callPlugins('getOriginalHeight', func_get_args(), $pluginInfo) : parent::getOriginalHeight();
    }

    /**
     * {@inheritdoc}
     */
    public function setWatermarkPosition($position)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setWatermarkPosition');
        return $pluginInfo ? $this->___callPlugins('setWatermarkPosition', func_get_args(), $pluginInfo) : parent::setWatermarkPosition($position);
    }

    /**
     * {@inheritdoc}
     */
    public function getWatermarkPosition()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWatermarkPosition');
        return $pluginInfo ? $this->___callPlugins('getWatermarkPosition', func_get_args(), $pluginInfo) : parent::getWatermarkPosition();
    }

    /**
     * {@inheritdoc}
     */
    public function setWatermarkImageOpacity($imageOpacity)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setWatermarkImageOpacity');
        return $pluginInfo ? $this->___callPlugins('setWatermarkImageOpacity', func_get_args(), $pluginInfo) : parent::setWatermarkImageOpacity($imageOpacity);
    }

    /**
     * {@inheritdoc}
     */
    public function getWatermarkImageOpacity()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWatermarkImageOpacity');
        return $pluginInfo ? $this->___callPlugins('getWatermarkImageOpacity', func_get_args(), $pluginInfo) : parent::getWatermarkImageOpacity();
    }

    /**
     * {@inheritdoc}
     */
    public function setWatermarkWidth($width)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setWatermarkWidth');
        return $pluginInfo ? $this->___callPlugins('setWatermarkWidth', func_get_args(), $pluginInfo) : parent::setWatermarkWidth($width);
    }

    /**
     * {@inheritdoc}
     */
    public function getWatermarkWidth()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWatermarkWidth');
        return $pluginInfo ? $this->___callPlugins('getWatermarkWidth', func_get_args(), $pluginInfo) : parent::getWatermarkWidth();
    }

    /**
     * {@inheritdoc}
     */
    public function setWatermarkHeight($height)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setWatermarkHeight');
        return $pluginInfo ? $this->___callPlugins('setWatermarkHeight', func_get_args(), $pluginInfo) : parent::setWatermarkHeight($height);
    }

    /**
     * {@inheritdoc}
     */
    public function getWatermarkHeight()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWatermarkHeight');
        return $pluginInfo ? $this->___callPlugins('getWatermarkHeight', func_get_args(), $pluginInfo) : parent::getWatermarkHeight();
    }

    /**
     * {@inheritdoc}
     */
    public function keepAspectRatio($value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'keepAspectRatio');
        return $pluginInfo ? $this->___callPlugins('keepAspectRatio', func_get_args(), $pluginInfo) : parent::keepAspectRatio($value);
    }

    /**
     * {@inheritdoc}
     */
    public function keepFrame($value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'keepFrame');
        return $pluginInfo ? $this->___callPlugins('keepFrame', func_get_args(), $pluginInfo) : parent::keepFrame($value);
    }

    /**
     * {@inheritdoc}
     */
    public function keepTransparency($value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'keepTransparency');
        return $pluginInfo ? $this->___callPlugins('keepTransparency', func_get_args(), $pluginInfo) : parent::keepTransparency($value);
    }

    /**
     * {@inheritdoc}
     */
    public function constrainOnly($value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'constrainOnly');
        return $pluginInfo ? $this->___callPlugins('constrainOnly', func_get_args(), $pluginInfo) : parent::constrainOnly($value);
    }

    /**
     * {@inheritdoc}
     */
    public function quality($value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'quality');
        return $pluginInfo ? $this->___callPlugins('quality', func_get_args(), $pluginInfo) : parent::quality($value);
    }

    /**
     * {@inheritdoc}
     */
    public function backgroundColor($value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'backgroundColor');
        return $pluginInfo ? $this->___callPlugins('backgroundColor', func_get_args(), $pluginInfo) : parent::backgroundColor($value);
    }

    /**
     * {@inheritdoc}
     */
    public function getSupportedFormats()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSupportedFormats');
        return $pluginInfo ? $this->___callPlugins('getSupportedFormats', func_get_args(), $pluginInfo) : parent::getSupportedFormats();
    }

    /**
     * {@inheritdoc}
     */
    public function validateUploadFile($filePath)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateUploadFile');
        return $pluginInfo ? $this->___callPlugins('validateUploadFile', func_get_args(), $pluginInfo) : parent::validateUploadFile($filePath);
    }

    /**
     * {@inheritdoc}
     */
    public function getFileSrcPath() : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFileSrcPath');
        return $pluginInfo ? $this->___callPlugins('getFileSrcPath', func_get_args(), $pluginInfo) : parent::getFileSrcPath();
    }

    /**
     * {@inheritdoc}
     */
    public function getFileSrcName() : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFileSrcName');
        return $pluginInfo ? $this->___callPlugins('getFileSrcName', func_get_args(), $pluginInfo) : parent::getFileSrcName();
    }
}
