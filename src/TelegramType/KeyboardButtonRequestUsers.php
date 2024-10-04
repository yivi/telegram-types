<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object defines the criteria used to request suitable users. Information about the selected users will be shared with the bot when the corresponding button is pressed. More about requesting users: https://core.telegram.org/bots/features#chat-and-user-selection
 */
class KeyboardButtonRequestUsers
{
    public function __construct(
        public int $requestId,
        public ?bool $userIsBot = null,
        public ?bool $userIsPremium = null,
        public ?int $maxQuantity = null,
        public ?bool $requestName = null,
        public ?bool $requestUsername = null,
        public ?bool $requestPhoto = null,
    ) {
    }
}
