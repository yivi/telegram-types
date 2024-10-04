<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Describes data sent from a Web App to the bot.
 */
class WebAppData
{
    public function __construct(
        public string $data,
        public string $buttonText,
    ) {
    }
}
