<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson\Styles;

use Kaiseki\WordPress\ThemeJson\DataTrait;
use Spatie\LaravelData\Data;

/**
 * https://developer.wordpress.org/themes/global-settings-and-styles/styles/styles-reference/#spacing
 */
final class Spacing extends Data
{
    use DataTrait;

    public function __construct(
        public ?bool $blockGap = null,
        public ?Spacing\Spacing $margin = null,
        public ?Spacing\Spacing $padding = null,
    ) {
    }
}
