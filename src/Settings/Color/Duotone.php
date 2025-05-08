<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson\Settings\Color;

use Spatie\LaravelData\Data;

final class Duotone extends Data
{
    public function __construct(
        /** @var array<string> */
        public array $colors,
        public string $slug,
        public string $name,
    ) {
    }
}
