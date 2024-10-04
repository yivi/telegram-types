<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * The message was originally sent to a channel chat.
 */
class MessageOriginChannel extends MessageOrigin
{
    public function __construct(
        public string $type,
        public int $date,
        public Chat $chat,
        public int $messageId,
        public ?string $authorSignature = null,
    ) {
    }
}
