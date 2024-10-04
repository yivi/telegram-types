<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Describes a withdrawal transaction to the Telegram Ads platform.
 */
class TransactionPartnerTelegramAds extends TransactionPartner
{
    public function __construct(
        public string $type,
    ) {
    }
}
