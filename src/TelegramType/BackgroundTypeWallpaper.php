<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Yivoff\TelegramType;

/**
 * The background is a wallpaper in the JPEG format.
 */
class BackgroundTypeWallpaper extends BackgroundType
{
    public function __construct(
        public string $type,
        public Document $document,
        public int $darkThemeDimming,
        public ?bool $isBlurred = null,
        public ?bool $isMoving = null,
    ) {
    }
}
