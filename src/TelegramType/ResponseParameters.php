<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Describes why a request was unsuccessful.
 */
class ResponseParameters
{
    public function __construct(
        public ?int $migrateToChatId = null,
        public ?int $retryAfter = null,
    ) {
    }
}
