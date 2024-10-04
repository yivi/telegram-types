<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Represents a location to which a chat is connected.
 */
class ChatLocation
{
    public function __construct(
        public Location $location,
        public string $address,
    ) {
    }
}
