<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Represents a result of an inline query that was chosen by the user and sent to their chat partner. Note: It is necessary to enable inline feedback via @BotFather in order to receive these objects in updates.
 */
class ChosenInlineResult
{
    public function __construct(
        public string $resultId,
        public User $from,
        public string $query,
        public ?Location $location = null,
        public ?string $inlineMessageId = null,
    ) {
    }
}
