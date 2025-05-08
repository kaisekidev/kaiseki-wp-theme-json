<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson;

use Kaiseki\WordPress\Hook\HookProviderInterface;
use WP_Theme_JSON_Data;

use function add_filter;

final class ThemeJsonUpdater implements HookProviderInterface
{
    public function __construct(private readonly ThemeJsonInterface $themeProvider)
    {
    }

    public function addHooks(): void
    {
        add_filter('wp_theme_json_data_theme', [$this, 'filterTheme']);
    }

    public function filterTheme(WP_Theme_JSON_Data $themeJson): WP_Theme_JSON_Data
    {
        $themeSettings = $this->themeProvider->getThemeSettings();
        $themeStyles = $this->themeProvider->getThemeStyles();

        if ($themeSettings === null && $themeStyles === null) {
            return $themeJson;
        }

        $data = [
            'version' => 3,
        ];

        if ($themeSettings !== null) {
            $data['settings'] = $themeSettings->toArray();
        }

        if ($themeStyles !== null) {
            $data['styles'] = $themeStyles->toArray();
        }

        return $themeJson->update_with($data);
    }
}
