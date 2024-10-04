<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * The withdrawal succeeded.
 */
class RevenueWithdrawalStateSucceeded extends RevenueWithdrawalState
{
    public function __construct(
        public string $type,
        public int $date,
        public string $url,
    ) {
    }
}
