<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object represents a boost added to a chat or changed.
 */
class ChatBoostUpdated
{
    public function __construct(
        public Chat $chat,
        public ChatBoost $boost,
    ) {
    }
}
