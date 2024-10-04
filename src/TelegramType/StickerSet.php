<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object represents a sticker set.
 */
class StickerSet
{
    public function __construct(
        public string $name,
        public string $title,
        public string $stickerType,
        public array $stickers,
        public ?PhotoSize $thumbnail = null,
    ) {
    }
}
