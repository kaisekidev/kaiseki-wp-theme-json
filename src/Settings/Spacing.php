<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson\Settings;

use Kaiseki\WordPress\ThemeJson\DataTrait;
use Kaiseki\WordPress\ThemeJson\Settings\Spacing\SpacingScale;
use Kaiseki\WordPress\ThemeJson\Settings\Spacing\SpacingSize;
use Spatie\LaravelData\Data;

/**
 * https://developer.wordpress.org/block-editor/reference-guides/theme-json-reference/theme-json-living/#spacing
 */
final class Spacing extends Data
{
    use DataTrait;

    public function __construct(
        public ?bool $blockGap = null,
        public ?bool $margin = null,
        public ?bool $padding = null,
        /** @var string[] */
        public ?array $units = null,
        public ?bool $customSpacingSize = null,
        public ?bool $defaultSpacingSizes = null,
        /** @var SpacingSize[] */
        public ?array $spacingSizes = [],
        /** @var SpacingScale[] */
        public ?array $spacingScale = [],
    ) {
    }
}
