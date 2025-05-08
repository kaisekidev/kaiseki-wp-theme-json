<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson\Styles\Border;

use Kaiseki\WordPress\ThemeJson\DataTrait;
use Spatie\LaravelData\Data;

/**
 * https://developer.wordpress.org/block-editor/reference-guides/theme-json-reference/theme-json-living/#border
 */
final class Radius extends Data
{
    use DataTrait;

    public function __construct(
        public ?string $topLeft = null,
        public ?string $topRight = null,
        public ?string $bottomLeft = null,
        public ?string $bottomRight = null,
    ) {
    }
}
