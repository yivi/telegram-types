<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object represents one row of the high scores table for a game.
 */
class GameHighScore
{
    public function __construct(
        public int $position,
        public User $user,
        public int $score,
    ) {
    }
}
