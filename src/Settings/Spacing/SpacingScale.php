<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson\Settings\Spacing;

use Spatie\LaravelData\Data;

final class SpacingScale extends Data
{
    public function __construct(
        public string $operator,
        public float $increment,
        public int $steps,
        public float $mediumStep,
        public string $unit,
    ) {
    }
}
