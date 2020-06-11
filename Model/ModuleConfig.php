<?php

namespace Gswo\SimpleCookieAlert\Model;

use Magento\Cms\Model\BlockRepository;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;
use Gswo\SimpleCookieAlert\Api\ModuleGetConfigInterface;

class ModuleConfig implements ModuleGetConfigInterface
{
    /**
     * @var BlockRepository
     */
    private $blockRepository;
    /**
     * @var ScopeConfigInterface
     */
    private $config;

    public function __construct(
        BlockRepository $blockRepository,
        ScopeConfigInterface $config
    ) {
        $this->blockRepository = $blockRepository;
        $this->config = $config;
    }

    public function getContent(): string
    {
        return (string)$this->config->getValue('gswo_simple_cookie_alert/general/content', ScopeInterface::SCOPE_STORE);
    }

    public function getDismissButtonText(): string
    {
        return (string)$this->config->getValue('gswo_simple_cookie_alert/dismiss_button/text', ScopeInterface::SCOPE_STORE);
    }

    public function getDismissButtonTextColor(): string
    {
        return (string)$this->config->getValue('gswo_simple_cookie_alert/dismiss_button/text_color', ScopeInterface::SCOPE_STORE);
    }

    public function getDismissButtonBackgroundColor(): string
    {
        return (string)$this->config->getValue('gswo_simple_cookie_alert/dismiss_button/background_color', ScopeInterface::SCOPE_STORE);
    }

    public function getDismissButtonBorderColor(): string
    {
        return (string)$this->config->getValue('gswo_simple_cookie_alert/dismiss_button/border_color', ScopeInterface::SCOPE_STORE);
    }

    public function getBackgroundColor(): string
    {
        return (string)$this->config->getValue('gswo_simple_cookie_alert/general/background_color', ScopeInterface::SCOPE_STORE);
    }

    public function getTextColor(): string
    {
        return (string)$this->config->getValue('gswo_simple_cookie_alert/general/text_color', ScopeInterface::SCOPE_STORE);
    }

    public function getBorderColor(): string
    {
        return (string)$this->config->getValue('gswo_simple_cookie_alert/general/border_color', ScopeInterface::SCOPE_STORE);
    }

    public function getTemplate(): string
    {
        return (string)$this->config->getValue('gswo_simple_cookie_alert/general/template', ScopeInterface::SCOPE_STORE);
    }
}
