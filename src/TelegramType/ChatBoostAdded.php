<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object represents a service message about a user boosting a chat.
 */
class ChatBoostAdded
{
    public function __construct(
        public int $boostCount,
    ) {
    }
}
