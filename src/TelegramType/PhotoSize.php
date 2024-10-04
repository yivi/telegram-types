<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object represents one size of a photo or a file / sticker thumbnail.
 */
class PhotoSize
{
    public function __construct(
        public string $fileId,
        public string $fileUniqueId,
        public int $width,
        public int $height,
        public ?int $fileSize = null,
    ) {
    }
}
