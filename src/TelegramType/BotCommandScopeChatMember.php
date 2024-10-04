<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Represents the scope of bot commands, covering a specific member of a group or supergroup chat.
 */
class BotCommandScopeChatMember extends BotCommandScope
{
    public function __construct(
        public string $type,
        public int|string $chatId,
        public int $userId,
    ) {
    }
}
