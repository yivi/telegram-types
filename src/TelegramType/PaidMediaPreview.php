<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * The paid media isn't available before the payment.
 */
class PaidMediaPreview extends PaidMedia
{
    public function __construct(
        public string $type,
        public ?int $width = null,
        public ?int $height = null,
        public ?int $duration = null,
    ) {
    }
}
