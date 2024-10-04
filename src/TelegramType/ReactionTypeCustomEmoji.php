<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * The reaction is based on a custom emoji.
 */
class ReactionTypeCustomEmoji extends ReactionType
{
    public function __construct(
        public string $type,
        public string $customEmojiId,
    ) {
    }
}
