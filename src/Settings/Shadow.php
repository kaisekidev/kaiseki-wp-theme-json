<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson\Settings;

use Kaiseki\WordPress\ThemeJson\DataTrait;
use Kaiseki\WordPress\ThemeJson\Settings\Shadow\Preset;
use Spatie\LaravelData\Data;

/**
 * https://developer.wordpress.org/block-editor/reference-guides/theme-json-reference/theme-json-living/#shadow
 */
final class Shadow extends Data
{
    use DataTrait;

    public function __construct(
        public ?bool $defaultPresets = null,
        /** @var Preset[] */
        public ?array $presets = null,
    ) {
    }
}
