<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Represents a chat member that owns the chat and has all administrator privileges.
 */
class ChatMemberOwner extends ChatMember
{
    public function __construct(
        public string $status,
        public User $user,
        public bool $isAnonymous,
        public ?string $customTitle = null,
    ) {
    }
}
