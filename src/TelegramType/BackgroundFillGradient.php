<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * The background is a gradient fill.
 */
class BackgroundFillGradient extends BackgroundFill
{
    public function __construct(
        public string $type,
        public int $topColor,
        public int $bottomColor,
        public int $rotationAngle,
    ) {
    }
}
