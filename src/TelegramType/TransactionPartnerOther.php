<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Describes a transaction with an unknown source or recipient.
 */
class TransactionPartnerOther extends TransactionPartner
{
    public function __construct(
        public string $type,
    ) {
    }
}
