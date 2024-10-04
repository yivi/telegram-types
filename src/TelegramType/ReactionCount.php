<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Represents a reaction added to a message along with the number of times it was added.
 */
class ReactionCount
{
    public function __construct(
        public ReactionType $type,
        public int $totalCount,
    ) {
    }
}
