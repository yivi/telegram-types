<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Represents an issue with the reverse side of a document. The error is considered resolved when the file with reverse side of the document changes.
 */
class PassportElementErrorReverseSide extends PassportElementError
{
    public function __construct(
        public string $source,
        public string $type,
        public string $fileHash,
        public string $message,
    ) {
    }
}
