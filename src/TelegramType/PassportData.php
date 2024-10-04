<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Describes Telegram Passport data shared with the bot by the user.
 */
class PassportData
{
    public function __construct(
        public array $data,
        public EncryptedCredentials $credentials,
    ) {
    }
}
