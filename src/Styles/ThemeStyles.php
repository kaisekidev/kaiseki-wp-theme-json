<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson\Styles;

use Kaiseki\WordPress\ThemeJson\DataTrait;
use Spatie\LaravelData\Data;

/**
 * https://developer.wordpress.org/themes/global-settings-and-styles/styles/styles-reference/
 */
final class ThemeStyles extends Data
{
    use DataTrait;

    public function __construct(
        public ?Border $border = null,
        public ?Color $color = null,
        public ?Dimensions $dimensions = null,
        public ?Spacing $spacing = null,
        public ?Typography $typography = null,
        // https://developer.wordpress.org/themes/global-settings-and-styles/styles/styles-reference/#filter
        public ?string $filter = null,
        // https://developer.wordpress.org/themes/global-settings-and-styles/styles/styles-reference/#shadow
        public ?string $shadow = null,
        public ?Outline $outline = null,
        public ?string $css = null,
    ) {
    }
}
