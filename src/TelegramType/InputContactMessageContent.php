<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Represents the content of a contact message to be sent as the result of an inline query.
 */
class InputContactMessageContent extends InputMessageContent
{
    public function __construct(
        public string $phoneNumber,
        public string $firstName,
        public ?string $lastName = null,
        public ?string $vcard = null,
    ) {
    }
}
