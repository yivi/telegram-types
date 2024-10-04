<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Contains information about the location of a Telegram Business account.
 */
class BusinessLocation
{
    public function __construct(
        public string $address,
        public ?Location $location = null,
    ) {
    }
}
