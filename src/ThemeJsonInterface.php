<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson;

use Kaiseki\WordPress\ThemeJson\Settings\ThemeSettings;
use Kaiseki\WordPress\ThemeJson\Styles\ThemeStyles;

interface ThemeJsonInterface
{
    public function getThemeSettings(): ?ThemeSettings;

    public function getThemeStyles(): ?ThemeStyles;
}
