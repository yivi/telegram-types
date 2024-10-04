<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Describes the birthdate of a user.
 */
class Birthdate
{
    public function __construct(
        public int $day,
        public int $month,
        public ?int $year = null,
    ) {
    }
}
