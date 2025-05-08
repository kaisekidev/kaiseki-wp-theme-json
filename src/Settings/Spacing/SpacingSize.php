<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson\Settings\Spacing;

use Spatie\LaravelData\Data;

final class SpacingSize extends Data
{
    public function __construct(
        public string $slug,
        public string $size,
        public string $name,
    ) {
    }
}
