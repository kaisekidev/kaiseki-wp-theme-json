<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson\Settings;

use Kaiseki\WordPress\ThemeJson\DataTrait;
use Spatie\LaravelData\Data;

/**
 * https://developer.wordpress.org/block-editor/reference-guides/theme-json-reference/theme-json-living/#background
 */
final class Background extends Data
{
    use DataTrait;

    public function __construct(
        public ?bool $backgroundImage = null,
        public ?bool $backgroundSize = null,
    ) {
    }
}
