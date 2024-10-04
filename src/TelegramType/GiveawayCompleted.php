<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object represents a service message about the completion of a giveaway without public winners.
 */
class GiveawayCompleted
{
    public function __construct(
        public int $winnerCount,
        public ?int $unclaimedPrizeCount = null,
        public ?Message $giveawayMessage = null,
        public ?bool $isStarGiveaway = null,
    ) {
    }
}
