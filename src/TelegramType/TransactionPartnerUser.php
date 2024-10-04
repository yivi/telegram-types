<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Describes a transaction with a user.
 */
class TransactionPartnerUser extends TransactionPartner
{
    public function __construct(
        public string $type,
        public User $user,
        public ?string $invoicePayload = null,
        public ?array $paidMedia = null,
        public ?string $paidMediaPayload = null,
    ) {
    }
}
