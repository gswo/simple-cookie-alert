<?php

namespace Gswo\SimpleCookieAlert\Api;

interface ModuleGetConfigInterface
{
    public function getContent(): string;

    public function getDismissButtonText(): string;

    public function getDismissButtonTextColor(): string;

    public function getDismissButtonBackgroundColor(): string;

    public function getDismissButtonBorderColor(): string;

    public function getBackgroundColor(): string;

    public function getTextColor(): string;

    public function getBorderColor(): string;

    public function getTemplate(): string;
}
