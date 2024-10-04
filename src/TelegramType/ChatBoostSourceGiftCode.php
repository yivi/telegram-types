<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * The boost was obtained by the creation of Telegram Premium gift codes to boost a chat. Each such code boosts the chat 4 times for the duration of the corresponding Telegram Premium subscription.
 */
class ChatBoostSourceGiftCode extends ChatBoostSource
{
    public function __construct(
        public string $source,
        public User $user,
    ) {
    }
}
