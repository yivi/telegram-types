<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Upon receiving a message with this object, Telegram clients will remove the current custom keyboard and display the default letter-keyboard. By default, custom keyboards are displayed until a new keyboard is sent by a bot. An exception is made for one-time keyboards that are hidden immediately after the user presses a button (see ReplyKeyboardMarkup). Not supported in channels and for messages sent on behalf of a Telegram Business account.
 */
class ReplyKeyboardRemove
{
    public function __construct(
        public bool $removeKeyboard,
        public ?bool $selective = null,
    ) {
    }
}
