<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * The message was originally sent by an unknown user.
 */
class MessageOriginHiddenUser extends MessageOrigin
{
    public function __construct(
        public string $type,
        public int $date,
        public string $senderUserName,
    ) {
    }
}
