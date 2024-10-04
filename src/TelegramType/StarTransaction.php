<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Describes a Telegram Star transaction.
 */
class StarTransaction
{
    public function __construct(
        public string $id,
        public int $amount,
        public int $date,
        public ?TransactionPartner $source = null,
        public ?TransactionPartner $receiver = null,
    ) {
    }
}
