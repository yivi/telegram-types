<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Represents an issue with one of the files that constitute the translation of a document. The error is considered resolved when the file changes.
 */
class PassportElementErrorTranslationFile extends PassportElementError
{
    public function __construct(
        public string $source,
        public string $type,
        public string $fileHash,
        public string $message,
    ) {
    }
}
