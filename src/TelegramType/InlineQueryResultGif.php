<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Represents a link to an animated GIF file. By default, this animated GIF file will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
 */
class InlineQueryResultGif extends InlineQueryResult
{
    public function __construct(
        public string $type,
        public string $id,
        public string $gifUrl,
        public string $thumbnailUrl,
        public ?int $gifWidth = null,
        public ?int $gifHeight = null,
        public ?int $gifDuration = null,
        public ?string $thumbnailMimeType = null,
        public ?string $title = null,
        public ?string $caption = null,
        public ?string $parseMode = null,
        public ?array $captionEntities = null,
        public ?bool $showCaptionAboveMedia = null,
        public ?InlineKeyboardMarkup $replyMarkup = null,
        public ?InputMessageContent $inputMessageContent = null,
    ) {
    }
}
