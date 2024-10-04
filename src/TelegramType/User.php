<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object represents a Telegram user or bot.
 */
class User
{
    public function __construct(
        public int $id,
        public bool $isBot,
        public string $firstName,
        public ?string $lastName = null,
        public ?string $username = null,
        public ?string $languageCode = null,
        public ?bool $isPremium = null,
        public ?bool $addedToAttachmentMenu = null,
        public ?bool $canJoinGroups = null,
        public ?bool $canReadAllGroupMessages = null,
        public ?bool $supportsInlineQueries = null,
        public ?bool $canConnectToBusiness = null,
        public ?bool $hasMainWebApp = null,
    ) {
    }
}
