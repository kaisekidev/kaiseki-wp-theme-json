<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson\Settings;

use Kaiseki\WordPress\ThemeJson\DataTrait;
use Kaiseki\WordPress\ThemeJson\Settings\Typography\FontFamily;
use Kaiseki\WordPress\ThemeJson\Settings\Typography\FontSize;
use Spatie\LaravelData\Data;

/**
 * https://developer.wordpress.org/block-editor/reference-guides/theme-json-reference/theme-json-living/#typography
 */
final class Typography extends Data
{
    use DataTrait;

    public function __construct(
        public ?bool $defaultFontSizes = null,
        public ?bool $customFontSize = null,
        public ?bool $fontStyle = null,
        public ?bool $fontWeight = null,
        public ?bool $fluid = null,
        public ?bool $letterSpacing = null,
        public ?bool $lineHeight = null,
        public ?bool $textAlign = null,
        public ?bool $textColumns = null,
        public ?bool $textDecoration = null,
        public ?bool $writingMode = null,
        public ?bool $textTransform = null,
        public ?bool $dropCap = null,
        /** @var FontSize[] */
        public ?array $fontSizes = null,
        /** @var FontFamily[] */
        public ?array $fontFamilies = null,
    ) {
    }
}
