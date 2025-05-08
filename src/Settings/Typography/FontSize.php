<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson\Settings\Typography;

use Spatie\LaravelData\Data;

final class FontSize extends Data
{
    public function __construct(
        public string $slug,
        public int $size,
        public string $name,
    ) {
    }
}
