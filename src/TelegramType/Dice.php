<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object represents an animated emoji that displays a random value.
 */
class Dice
{
    public function __construct(
        public string $emoji,
        public int $value,
    ) {
    }
}
