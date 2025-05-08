<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson\Settings;

use Kaiseki\WordPress\ThemeJson\DataTrait;
use Spatie\LaravelData\Data;

/**
 * https://developer.wordpress.org/block-editor/reference-guides/theme-json-reference/theme-json-living
 */
final class ThemeSettings extends Data
{
    use DataTrait;

    public function __construct(
        public ?bool $appearanceTools = null,
        public ?Background $background = null,
        public ?Border $border = null,
        public ?Color $color = null,
        public ?Dimensions $dimensions = null,
        public ?Layout $layout = null,
        public ?Position $position = null,
        public ?Shadow $shadow = null,
        public ?Spacing $spacing = null,
        public ?Typography $typography = null,
    ) {
    }
}
