<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object contains information about a paid media purchase.
 */
class PaidMediaPurchased
{
    public function __construct(
        public User $from,
        public string $paidMediaPayload,
    ) {
    }
}
