<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * The background is taken directly from a built-in chat theme.
 */
class BackgroundTypeChatTheme extends BackgroundType
{
    public function __construct(
        public string $type,
        public string $themeName,
    ) {
    }
}
