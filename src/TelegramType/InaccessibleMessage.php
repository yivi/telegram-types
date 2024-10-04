<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object describes a message that was deleted or is otherwise inaccessible to the bot.
 */
class InaccessibleMessage extends MaybeInaccessibleMessage
{
    public function __construct(
        public Chat $chat,
        public int $messageId,
        public int $date,
    ) {
    }
}
