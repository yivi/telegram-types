<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * The boost was obtained by the creation of a Telegram Premium or a Telegram Star giveaway. This boosts the chat 4 times for the duration of the corresponding Telegram Premium subscription for Telegram Premium giveaways and prize_star_count / 500 times for one year for Telegram Star giveaways.
 */
class ChatBoostSourceGiveaway extends ChatBoostSource
{
    public function __construct(
        public string $source,
        public int $giveawayMessageId,
        public ?User $user = null,
        public ?int $prizeStarCount = null,
        public ?bool $isUnclaimed = null,
    ) {
    }
}
