<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Represents an issue with the translated version of a document. The error is considered resolved when a file with the document translation change.
 */
class PassportElementErrorTranslationFiles extends PassportElementError
{
    public function __construct(
        public string $source,
        public string $type,
        public array $fileHashes,
        public string $message,
    ) {
    }
}
