<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Describes the paid media added to a message.
 */
class PaidMediaInfo
{
    public function __construct(
        public int $starCount,
        public array $paidMedia,
    ) {
    }
}
