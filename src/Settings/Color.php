<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson\Settings;

use Kaiseki\WordPress\ThemeJson\DataTrait;
use Kaiseki\WordPress\ThemeJson\Settings\Color\Duotone;
use Kaiseki\WordPress\ThemeJson\Settings\Color\Gradient;
use Kaiseki\WordPress\ThemeJson\Settings\Color\Palette;
use Spatie\LaravelData\Data;

/**
 * https://developer.wordpress.org/themes/global-settings-and-styles/settings/color/#color-settings
 */
final class Color extends Data
{
    use DataTrait;

    public function __construct(
        public ?bool $background = null,
        public ?bool $custom = null,
        public ?bool $customDuotone = null,
        public ?bool $customGradient = null,
        public ?bool $defaultDuotone = null,
        public ?bool $defaultGradients = null,
        public ?bool $defaultPalette = null,
        /** @var Duotone[] */
        public ?array $duotone = null,
        /** @var Gradient[] */
        public ?array $gradients = null,
        public ?bool $link = null,
        /** @var Palette[] */
        public ?array $palette = null,
        public ?bool $text = null,
    ) {
    }
}
