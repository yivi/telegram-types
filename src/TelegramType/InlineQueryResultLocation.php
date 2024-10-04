<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Represents a location on a map. By default, the location will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the location.
 */
class InlineQueryResultLocation extends InlineQueryResult
{
    public function __construct(
        public string $type,
        public string $id,
        public float $latitude,
        public float $longitude,
        public string $title,
        public ?float $horizontalAccuracy = null,
        public ?int $livePeriod = null,
        public ?int $heading = null,
        public ?int $proximityAlertRadius = null,
        public ?InlineKeyboardMarkup $replyMarkup = null,
        public ?InputMessageContent $inputMessageContent = null,
        public ?string $thumbnailUrl = null,
        public ?int $thumbnailWidth = null,
        public ?int $thumbnailHeight = null,
    ) {
    }
}
