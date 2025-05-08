<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson\Styles;

use Kaiseki\WordPress\ThemeJson\DataTrait;
use Kaiseki\WordPress\ThemeJson\Styles\Border\Radius;
use Kaiseki\WordPress\ThemeJson\Styles\Border\Side;
use Spatie\LaravelData\Data;

/**
 * https://developer.wordpress.org/themes/global-settings-and-styles/styles/styles-reference/#border
 */
final class Border extends Data
{
    use DataTrait;

    public function __construct(
        public ?string $color = null,
        public string|Radius|null $radius = null,
        public ?string $style = null,
        public ?string $width = null,
        public ?Side $top = null,
        public ?Side $right = null,
        public ?Side $bottom = null,
        public ?Side $left = null,
    ) {
    }
}
