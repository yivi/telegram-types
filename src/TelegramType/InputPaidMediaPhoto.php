<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * The paid media to send is a photo.
 */
class InputPaidMediaPhoto extends InputPaidMedia
{
    public function __construct(
        public string $type,
        public string $media,
    ) {
    }
}
