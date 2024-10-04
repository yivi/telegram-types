<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object represents reaction changes on a message with anonymous reactions.
 */
class MessageReactionCountUpdated
{
    public function __construct(
        public Chat $chat,
        public int $messageId,
        public int $date,
        public array $reactions,
    ) {
    }
}
