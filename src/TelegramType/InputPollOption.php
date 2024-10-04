<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object contains information about one answer option in a poll to be sent.
 */
class InputPollOption
{
    public function __construct(
        public string $text,
        public ?string $textParseMode = null,
        public ?array $textEntities = null,
    ) {
    }
}
