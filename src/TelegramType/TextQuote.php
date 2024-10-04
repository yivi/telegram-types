<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object contains information about the quoted part of a message that is replied to by the given message.
 */
class TextQuote
{
    public function __construct(
        public string $text,
        public int $position,
        public ?array $entities = null,
        public ?bool $isManual = null,
    ) {
    }
}
