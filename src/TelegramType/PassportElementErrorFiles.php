<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Represents an issue with a list of scans. The error is considered resolved when the list of files containing the scans changes.
 */
class PassportElementErrorFiles extends PassportElementError
{
    public function __construct(
        public string $source,
        public string $type,
        public array $fileHashes,
        public string $message,
    ) {
    }
}
