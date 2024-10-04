<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Represents an issue with a document scan. The error is considered resolved when the file with the document scan changes.
 */
class PassportElementErrorFile extends PassportElementError
{
    public function __construct(
        public string $source,
        public string $type,
        public string $fileHash,
        public string $message,
    ) {
    }
}
