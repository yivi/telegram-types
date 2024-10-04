<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Describes the connection of the bot with a business account.
 */
class BusinessConnection
{
    public function __construct(
        public string $id,
        public User $user,
        public int $userChatId,
        public int $date,
        public bool $canReply,
        public bool $isEnabled,
    ) {
    }
}
