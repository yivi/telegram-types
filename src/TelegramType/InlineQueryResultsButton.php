<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object represents a button to be shown above inline query results. You must use exactly one of the optional fields.
 */
class InlineQueryResultsButton
{
    public function __construct(
        public string $text,
        public ?WebAppInfo $webApp = null,
        public ?string $startParameter = null,
    ) {
    }
}
