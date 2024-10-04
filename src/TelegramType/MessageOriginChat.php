<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * The message was originally sent on behalf of a chat to a group chat.
 */
class MessageOriginChat extends MessageOrigin
{
    public function __construct(
        public string $type,
        public int $date,
        public Chat $senderChat,
        public ?string $authorSignature = null,
    ) {
    }
}
