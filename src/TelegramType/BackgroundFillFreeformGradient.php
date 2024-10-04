<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * The background is a freeform gradient that rotates after every message in the chat.
 */
class BackgroundFillFreeformGradient extends BackgroundFill
{
    public function __construct(
        public string $type,
        public array $colors,
    ) {
    }
}
