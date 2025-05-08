<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson\Styles;

use Kaiseki\WordPress\ThemeJson\DataTrait;
use Spatie\LaravelData\Data;

/**
 * https://developer.wordpress.org/themes/global-settings-and-styles/styles/styles-reference/#dimensions
 */
final class Dimensions extends Data
{
    use DataTrait;

    public function __construct(
        public ?string $aspectRatio = null,
        public ?string $minHeight = null,
    ) {
    }
}
