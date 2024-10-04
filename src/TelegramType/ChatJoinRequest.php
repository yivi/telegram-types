<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Represents a join request sent to a chat.
 */
class ChatJoinRequest
{
    public function __construct(
        public Chat $chat,
        public User $from,
        public int $userChatId,
        public int $date,
        public ?string $bio = null,
        public ?ChatInviteLink $inviteLink = null,
    ) {
    }
}
