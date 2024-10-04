<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object contains information about one answer option in a poll.
 */
class PollOption
{
    public function __construct(
        public string $text,
        public int $voterCount,
        public ?array $textEntities = null,
    ) {
    }
}
