<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object represents a boost removed from a chat.
 */
class ChatBoostRemoved
{
    public function __construct(
        public Chat $chat,
        public string $boostId,
        public int $removeDate,
        public ChatBoostSource $source,
    ) {
    }
}
