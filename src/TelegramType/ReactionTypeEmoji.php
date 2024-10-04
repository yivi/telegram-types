<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * The reaction is based on an emoji.
 */
class ReactionTypeEmoji extends ReactionType
{
    public function __construct(
        public string $type,
        public string $emoji,
    ) {
    }
}
