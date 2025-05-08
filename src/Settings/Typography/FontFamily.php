<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson\Settings\Typography;

use Spatie\LaravelData\Data;

final class FontFamily extends Data
{
    public function __construct(
        public string $fontFamily,
        public string $slug,
        public string $name,
        /** @var FontFace[] */
        public array $fontFace,
    ) {
    }
}
