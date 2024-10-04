<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Describes a withdrawal transaction with Fragment.
 */
class TransactionPartnerFragment extends TransactionPartner
{
    public function __construct(
        public string $type,
        public ?RevenueWithdrawalState $withdrawalState = null,
    ) {
    }
}
