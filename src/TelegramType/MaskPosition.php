<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object describes the position on faces where a mask should be placed by default.
 */
class MaskPosition
{
    public function __construct(
        public string $point,
        public float $xShift,
        public float $yShift,
        public float $scale,
    ) {
    }
}
