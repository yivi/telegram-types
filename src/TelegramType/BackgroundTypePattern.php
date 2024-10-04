<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * The background is a PNG or TGV (gzipped subset of SVG with MIME type "application/x-tgwallpattern") pattern to be combined with the background fill chosen by the user.
 */
class BackgroundTypePattern extends BackgroundType
{
    public function __construct(
        public string $type,
        public Document $document,
        public BackgroundFill $fill,
        public int $intensity,
        public ?bool $isInverted = null,
        public ?bool $isMoving = null,
    ) {
    }
}
