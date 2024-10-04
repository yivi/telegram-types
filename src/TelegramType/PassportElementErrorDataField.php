<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Represents an issue in one of the data fields that was provided by the user. The error is considered resolved when the field's value changes.
 */
class PassportElementErrorDataField extends PassportElementError
{
    public function __construct(
        public string $source,
        public string $type,
        public string $fieldName,
        public string $dataHash,
        public string $message,
    ) {
    }
}
