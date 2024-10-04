<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object represent a user's profile pictures.
 */
class UserProfilePhotos
{
    public function __construct(
        public int $totalCount,
        public array $photos,
    ) {
    }
}
