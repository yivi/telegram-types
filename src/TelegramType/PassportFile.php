<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object represents a file uploaded to Telegram Passport. Currently all Telegram Passport files are in JPEG format when decrypted and don't exceed 10MB.
 */
class PassportFile
{
    public function __construct(
        public string $fileId,
        public string $fileUniqueId,
        public int $fileSize,
        public int $fileDate,
    ) {
    }
}
