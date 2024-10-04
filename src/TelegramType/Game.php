<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object represents a game. Use BotFather to create and edit games, their short names will act as unique identifiers.
 */
class Game
{
    public function __construct(
        public string $title,
        public string $description,
        public array $photo,
        public ?string $text = null,
        public ?array $textEntities = null,
        public ?Animation $animation = null,
    ) {
    }
}
