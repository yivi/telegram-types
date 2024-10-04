<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Represents an issue in an unspecified place. The error is considered resolved when new data is added.
 */
class PassportElementErrorUnspecified extends PassportElementError
{
    public function __construct(
        public string $source,
        public string $type,
        public string $elementHash,
        public string $message,
    ) {
    }
}
