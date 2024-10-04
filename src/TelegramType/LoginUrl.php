<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object represents a parameter of the inline keyboard button used to automatically authorize a user. Serves as a great replacement for the Telegram Login Widget when the user is coming from Telegram. All the user needs to do is tap/click a button and confirm that they want to log in: Telegram apps support these buttons as of version 5.7.
 */
class LoginUrl
{
    public function __construct(
        public string $url,
        public ?string $forwardText = null,
        public ?string $botUsername = null,
        public ?bool $requestWriteAccess = null,
    ) {
    }
}
