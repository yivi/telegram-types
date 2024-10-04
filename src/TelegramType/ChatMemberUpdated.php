<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object represents changes in the status of a chat member.
 */
class ChatMemberUpdated
{
    public function __construct(
        public Chat $chat,
        public User $from,
        public int $date,
        public ChatMember $oldChatMember,
        public ChatMember $newChatMember,
        public ?ChatInviteLink $inviteLink = null,
        public ?bool $viaJoinRequest = null,
        public ?bool $viaChatFolderInviteLink = null,
    ) {
    }
}
