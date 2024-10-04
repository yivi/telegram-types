<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object represents one button of the reply keyboard. At most one of the optional fields must be used to specify type of the button. For simple text buttons, String can be used instead of this object to specify the button text. Note: request_users and request_chat options will only work in Telegram versions released after 3 February, 2023. Older clients will display unsupported message.
 */
class KeyboardButton
{
    public function __construct(
        public string $text,
        public ?KeyboardButtonRequestUsers $requestUsers = null,
        public ?KeyboardButtonRequestChat $requestChat = null,
        public ?bool $requestContact = null,
        public ?bool $requestLocation = null,
        public ?KeyboardButtonPollType $requestPoll = null,
        public ?WebAppInfo $webApp = null,
    ) {
    }
}
