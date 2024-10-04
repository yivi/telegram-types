<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Represents a photo to be sent.
 */
class InputMediaPhoto extends InputMedia
{
    public function __construct(
        public string $type,
        public string $media,
        public ?string $caption = null,
        public ?string $parseMode = null,
        public ?array $captionEntities = null,
        public ?bool $showCaptionAboveMedia = null,
        public ?bool $hasSpoiler = null,
    ) {
    }
}
