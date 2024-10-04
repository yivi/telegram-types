<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object contains information about the users whose identifiers were shared with the bot using a KeyboardButtonRequestUsers button.
 */
class UsersShared
{
    public function __construct(
        public int $requestId,
        public array $users,
    ) {
    }
}
