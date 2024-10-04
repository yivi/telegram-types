<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object represents one shipping option.
 */
class ShippingOption
{
    public function __construct(
        public string $id,
        public string $title,
        public array $prices,
    ) {
    }
}
