<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object contains information about a chat boost.
 */
class ChatBoost
{
    public function __construct(
        public string $boostId,
        public int $addDate,
        public int $expirationDate,
        public ChatBoostSource $source,
    ) {
    }
}
