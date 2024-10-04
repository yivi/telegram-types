<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * The boost was obtained by subscribing to Telegram Premium or by gifting a Telegram Premium subscription to another user.
 */
class ChatBoostSourcePremium extends ChatBoostSource
{
    public function __construct(
        public string $source,
        public User $user,
    ) {
    }
}
