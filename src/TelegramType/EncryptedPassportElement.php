<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Describes documents or other Telegram Passport elements shared with the bot by the user.
 */
class EncryptedPassportElement
{
    public function __construct(
        public string $type,
        public string $hash,
        public ?string $data = null,
        public ?string $phoneNumber = null,
        public ?string $email = null,
        public ?array $files = null,
        public ?PassportFile $frontSide = null,
        public ?PassportFile $reverseSide = null,
        public ?PassportFile $selfie = null,
        public ?array $translation = null,
    ) {
    }
}
