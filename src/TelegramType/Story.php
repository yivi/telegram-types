<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object represents a story.
 */
class Story
{
    public function __construct(
        public Chat $chat,
        public int $id,
    ) {
    }
}
