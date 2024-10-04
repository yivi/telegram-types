<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object describes a sticker to be added to a sticker set.
 */
class InputSticker
{
    public function __construct(
        public InputFile|string $sticker,
        public string $format,
        public array $emojiList,
        public ?MaskPosition $maskPosition = null,
        public ?array $keywords = null,
    ) {
    }
}
