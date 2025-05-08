<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson\Settings\Color;

use Spatie\LaravelData\Data;

final class Palette extends Data
{
    public function __construct(
        public string $slug,
        public string $color,
        public string $name,
    ) {
    }
}
