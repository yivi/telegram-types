<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Describes reply parameters for the message that is being sent.
 */
class ReplyParameters
{
    public function __construct(
        public int $messageId,
        public int|string|null $chatId = null,
        public ?bool $allowSendingWithoutReply = null,
        public ?string $quote = null,
        public ?string $quoteParseMode = null,
        public ?array $quoteEntities = null,
        public ?int $quotePosition = null,
    ) {
    }
}
