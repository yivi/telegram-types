<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * This object represents a service message about a user allowing a bot to write messages after adding it to the attachment menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method requestWriteAccess.
 */
class WriteAccessAllowed
{
    public function __construct(
        public ?bool $fromRequest = null,
        public ?string $webAppName = null,
        public ?bool $fromAttachmentMenu = null,
    ) {
    }
}
