<?php

namespace Gswo\SimpleCookieAlert\Block\Adminhtml\System\Config;

use Magento\Backend\Block\Template\Context;
use Magento\Cms\Model\Wysiwyg\Config as WysiwygConfig;
use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;


class Editor extends Field
{
    /**
     * @var WysiwygConfig
     */
    private $wysiwygConfig;

    public function __construct(
        Context $context,
        WysiwygConfig $wysiwygConfig,
        array $data = []
    ) {
        $this->wysiwygConfig = $wysiwygConfig;
        parent::__construct($context, $data);
    }

    /** @noinspection PhpUndefinedMethodInspection */
    protected function _getElementHtml(AbstractElement $element)
    {
        $element->setWysiwyg(true);

        $element->setConfig($this->wysiwygConfig->getConfig([
            'add_variables' => false,
            'add_widgets' => false,
            'add_images' => false,
            'height' => '200px'
        ]));
        return parent::_getElementHtml($element);
    }
}
