<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object defines the criteria used to request a suitable chat. Information about the selected chat will be shared with the bot when the corresponding button is pressed. The bot will be granted requested rights in the chat if appropriate. More about requesting chats: https://core.telegram.org/bots/features#chat-and-user-selection.
 */
class KeyboardButtonRequestChat
{
    public function __construct(
        public int $requestId,
        public bool $chatIsChannel,
        public ?bool $chatIsForum = null,
        public ?bool $chatHasUsername = null,
        public ?bool $chatIsCreated = null,
        public ?ChatAdministratorRights $userAdministratorRights = null,
        public ?ChatAdministratorRights $botAdministratorRights = null,
        public ?bool $botIsMember = null,
        public ?bool $requestTitle = null,
        public ?bool $requestUsername = null,
        public ?bool $requestPhoto = null,
    ) {
    }
}
