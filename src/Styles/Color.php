<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson\Styles;

use Kaiseki\WordPress\ThemeJson\DataTrait;
use Spatie\LaravelData\Data;

/**
 * https://developer.wordpress.org/themes/global-settings-and-styles/styles/styles-reference/#color
 */
final class Color extends Data
{
    use DataTrait;

    public function __construct(
        public ?string $background = null,
        public ?string $gradient = null,
        public ?string $text = null,
    ) {
    }
}
