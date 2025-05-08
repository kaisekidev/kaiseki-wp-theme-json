<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson\Styles;

use Kaiseki\WordPress\ThemeJson\DataTrait;
use Spatie\LaravelData\Data;

final class Outline extends Data
{
    use DataTrait;

    public function __construct(
        public ?string $color = null,
        public ?string $offset = null,
        public ?string $style = null,
        public ?string $width = null,
    ) {
    }
}
