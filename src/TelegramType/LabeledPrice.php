<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object represents a portion of the price for goods or services.
 */
class LabeledPrice
{
    public function __construct(
        public string $label,
        public int $amount,
    ) {
    }
}
