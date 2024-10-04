<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Represents a chat member that has no additional privileges or restrictions.
 */
class ChatMemberMember extends ChatMember
{
    public function __construct(
        public string $status,
        public User $user,
        public ?int $untilDate = null,
    ) {
    }
}
