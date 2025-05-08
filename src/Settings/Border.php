<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson\Settings;

use Kaiseki\WordPress\ThemeJson\DataTrait;
use Spatie\LaravelData\Data;

/**
 * https://developer.wordpress.org/block-editor/reference-guides/theme-json-reference/theme-json-living/#border
 */
final class Border extends Data
{
    use DataTrait;

    public function __construct(
        public ?bool $radius = null,
        public ?bool $color = null,
        public ?bool $style = null,
        public ?bool $width = null,
    ) {
    }
}
