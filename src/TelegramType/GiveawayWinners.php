<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object represents a message about the completion of a giveaway with public winners.
 */
class GiveawayWinners
{
    public function __construct(
        public Chat $chat,
        public int $giveawayMessageId,
        public int $winnersSelectionDate,
        public int $winnerCount,
        public array $winners,
        public ?int $additionalChatCount = null,
        public ?int $prizeStarCount = null,
        public ?int $premiumSubscriptionMonthCount = null,
        public ?int $unclaimedPrizeCount = null,
        public ?bool $onlyNewMembers = null,
        public ?bool $wasRefunded = null,
        public ?string $prizeDescription = null,
    ) {
    }
}
