<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Represents the scope of bot commands, covering all administrators of a specific group or supergroup chat.
 */
class BotCommandScopeChatAdministrators extends BotCommandScope
{
    public function __construct(
        public string $type,
        public int|string $chatId,
    ) {
    }
}
