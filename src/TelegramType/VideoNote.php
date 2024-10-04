<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object represents a video message (available in Telegram apps as of v.4.0).
 */
class VideoNote
{
    public function __construct(
        public string $fileId,
        public string $fileUniqueId,
        public int $length,
        public int $duration,
        public ?PhotoSize $thumbnail = null,
        public ?int $fileSize = null,
    ) {
    }
}
