<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson\Settings;

use Kaiseki\WordPress\ThemeJson\DataTrait;
use Kaiseki\WordPress\ThemeJson\Settings\Dimension\AspectRatio;
use Spatie\LaravelData\Data;

/**
 * https://developer.wordpress.org/themes/global-settings-and-styles/settings/color/#color-settings
 */
final class Dimensions extends Data
{
    use DataTrait;

    public function __construct(
        public ?bool $aspectRatio = null,
        public ?bool $defaultAspectRatios = null,
        /** @var AspectRatio[] */
        public ?array $aspectRatios = null,
        public ?bool $minHeight = null,
    ) {
    }
}
