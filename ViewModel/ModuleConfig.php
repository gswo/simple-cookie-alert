<?php

namespace Gswo\SimpleCookieAlert\ViewModel;

use Gswo\SimpleCookieAlert\Api\ModuleGetConfigInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class ModuleConfig implements ArgumentInterface, ModuleGetConfigInterface
{
    /**
     * @var \Gswo\SimpleCookieAlert\Model\ModuleConfig
     */
    private $config;

    public function __construct(\Gswo\SimpleCookieAlert\Model\ModuleConfig $config)
    {
        return $this->config = $config;
    }

    public function getContent(): string
    {
        return $this->config->getContent();
    }

    public function getDismissButtonText(): string
    {
        return $this->config->getDismissButtonText();
    }

    public function getDismissButtonTextColor(): string
    {
        return $this->config->getDismissButtonTextColor();
    }

    public function getDismissButtonBackgroundColor(): string
    {
        return $this->config->getDismissButtonBackgroundColor();
    }

    public function getDismissButtonBorderColor(): string
    {
        return $this->config->getDismissButtonBorderColor();
    }

    public function getBackgroundColor(): string
    {
        return $this->config->getBackgroundColor();
    }

    public function getTextColor(): string
    {
        return $this->config->getTextColor();
    }

    public function getBorderColor(): string
    {
        return $this->config->getBorderColor();
    }

    public function getTemplate(): string
    {
        return $this->config->getTemplate();
    }
}
