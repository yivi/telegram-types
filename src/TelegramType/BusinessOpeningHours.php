<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Describes the opening hours of a business.
 */
class BusinessOpeningHours
{
    public function __construct(
        public string $timeZoneName,
        public array $openingHours,
    ) {
    }
}
