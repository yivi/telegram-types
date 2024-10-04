<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * The background is automatically filled based on the selected colors.
 */
class BackgroundTypeFill extends BackgroundType
{
    public function __construct(
        public string $type,
        public BackgroundFill $fill,
        public int $darkThemeDimming,
    ) {
    }
}
