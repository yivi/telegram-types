<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Represents a link to an article or web page.
 */
class InlineQueryResultArticle extends InlineQueryResult
{
    public function __construct(
        public string $type,
        public string $id,
        public string $title,
        public InputMessageContent $inputMessageContent,
        public ?InlineKeyboardMarkup $replyMarkup = null,
        public ?string $url = null,
        public ?bool $hideUrl = null,
        public ?string $description = null,
        public ?string $thumbnailUrl = null,
        public ?int $thumbnailWidth = null,
        public ?int $thumbnailHeight = null,
    ) {
    }
}
