<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object represents a change of a reaction on a message performed by a user.
 */
class MessageReactionUpdated
{
    public function __construct(
        public Chat $chat,
        public int $messageId,
        public int $date,
        public array $oldReaction,
        public array $newReaction,
        public ?User $user = null,
        public ?Chat $actorChat = null,
    ) {
    }
}
