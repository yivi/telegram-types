<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * Describes the current status of a webhook.
 */
class WebhookInfo
{
    public function __construct(
        public string $url,
        public bool $hasCustomCertificate,
        public int $pendingUpdateCount,
        public ?string $ipAddress = null,
        public ?int $lastErrorDate = null,
        public ?string $lastErrorMessage = null,
        public ?int $lastSynchronizationErrorDate = null,
        public ?int $maxConnections = null,
        public ?array $allowedUpdates = null,
    ) {
    }
}
