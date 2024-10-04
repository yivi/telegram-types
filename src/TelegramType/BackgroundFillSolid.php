<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * The background is filled using the selected color.
 */
class BackgroundFillSolid extends BackgroundFill
{
    public function __construct(
        public string $type,
        public int $color,
    ) {
    }
}
