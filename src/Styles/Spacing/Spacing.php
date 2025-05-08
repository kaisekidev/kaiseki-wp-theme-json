<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson\Styles\Spacing;

use Kaiseki\WordPress\ThemeJson\DataTrait;
use Spatie\LaravelData\Data;

/**
 * https://developer.wordpress.org/block-editor/reference-guides/theme-json-reference/theme-json-living/#border
 */
final class Spacing extends Data
{
    use DataTrait;

    public function __construct(
        public ?string $top = null,
        public ?string $right = null,
        public ?string $bottom = null,
        public ?string $left = null,
    ) {
    }
}
