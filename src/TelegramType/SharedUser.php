<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object contains information about a user that was shared with the bot using a KeyboardButtonRequestUsers button.
 */
class SharedUser
{
    public function __construct(
        public int $userId,
        public ?string $firstName = null,
        public ?string $lastName = null,
        public ?string $username = null,
        public ?array $photo = null,
    ) {
    }
}
