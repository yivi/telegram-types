<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object is received when messages are deleted from a connected business account.
 */
class BusinessMessagesDeleted
{
    public function __construct(
        public string $businessConnectionId,
        public Chat $chat,
        public array $messageIds,
    ) {
    }
}
