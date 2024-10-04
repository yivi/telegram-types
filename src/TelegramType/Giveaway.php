<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object represents a message about a scheduled giveaway.
 */
class Giveaway
{
    public function __construct(
        public array $chats,
        public int $winnersSelectionDate,
        public int $winnerCount,
        public ?bool $onlyNewMembers = null,
        public ?bool $hasPublicWinners = null,
        public ?string $prizeDescription = null,
        public ?array $countryCodes = null,
        public ?int $prizeStarCount = null,
        public ?int $premiumSubscriptionMonthCount = null,
    ) {
    }
}
