<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Describes an interval of time during which a business is open.
 */
class BusinessOpeningHoursInterval
{
    public function __construct(
        public int $openingMinute,
        public int $closingMinute,
    ) {
    }
}
