<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson\Styles;

use Kaiseki\WordPress\ThemeJson\DataTrait;
use Spatie\LaravelData\Data;

/**
 * https://developer.wordpress.org/themes/global-settings-and-styles/styles/styles-reference/#typography
 */
final class Typography extends Data
{
    use DataTrait;

    public function __construct(
        public ?string $fontFamily = null,
        public ?string $fontSize = null,
        public ?string $fontStyle = null,
        public ?string $fontWeight = null,
        public ?string $letterSpacing = null,
        public ?string $lineHeight = null,
        public ?string $textAlign = null,
        public ?string $textColumns = null,
        public ?string $textDecoration = null,
        public ?string $writingMode = null,
        public ?string $textTransform = null,
    ) {
    }
}
