<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Represents a menu button, which launches a Web App.
 */
class MenuButtonWebApp extends MenuButton
{
    public function __construct(
        public string $type,
        public string $text,
        public WebAppInfo $webApp,
    ) {
    }
}
