<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson;

use Kaiseki\WordPress\ThemeJson\Settings\ThemeSettings;

interface BlockSettingsInterface
{
    public function getBlockSettings(): ThemeSettings;
}
