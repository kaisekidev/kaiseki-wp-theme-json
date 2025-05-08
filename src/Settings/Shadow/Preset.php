<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson\Settings\Shadow;

use Spatie\LaravelData\Data;

final class Preset extends Data
{
    public function __construct(
        public string $name,
        public string $slug,
        public string $shadow,
    ) {
    }
}
