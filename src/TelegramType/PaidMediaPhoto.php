<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * The paid media is a photo.
 */
class PaidMediaPhoto extends PaidMedia
{
    public function __construct(
        public string $type,
        public array $photo,
    ) {
    }
}
