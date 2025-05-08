<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson\Settings;

use Kaiseki\WordPress\ThemeJson\DataTrait;
use Spatie\LaravelData\Data;

/**
 * https://developer.wordpress.org/block-editor/reference-guides/theme-json-reference/theme-json-living/#layout
 */
final class Layout extends Data
{
    use DataTrait;

    public function __construct(
        public ?string $contentSize = null,
        public ?string $wideSize = null,
        public ?bool $allowEditing = null,
        public ?bool $allowCustomContentAndWideSize = null,
    ) {
    }
}
