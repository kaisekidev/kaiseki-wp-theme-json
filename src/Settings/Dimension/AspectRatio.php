<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson\Settings\Dimension;

use Spatie\LaravelData\Data;

final class AspectRatio extends Data
{
    public function __construct(
        public string $name,
        public string $slug,
        public string $ration,
    ) {
    }
}
