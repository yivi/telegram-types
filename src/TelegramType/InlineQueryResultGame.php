<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Represents a Game.
 */
class InlineQueryResultGame extends InlineQueryResult
{
    public function __construct(
        public string $type,
        public string $id,
        public string $gameShortName,
        public ?InlineKeyboardMarkup $replyMarkup = null,
    ) {
    }
}
