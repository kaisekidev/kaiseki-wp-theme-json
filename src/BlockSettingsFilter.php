<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson;

use Kaiseki\WordPress\Hook\HookProviderInterface;
use WP_Theme_JSON_Data;

use function add_filter;
use function array_filter;
use function is_string;

use const ARRAY_FILTER_USE_KEY;

final readonly class BlockSettingsFilter implements HookProviderInterface
{
    /**
     * @param BlockSettingsUpdater                  $blockSettingsUpdater
     * @param array<string, BlockSettingsInterface> $blockSettings
     */
    public function __construct(
        private BlockSettingsUpdater $blockSettingsUpdater,
        private array $blockSettings,
    ) {
    }

    public function addHooks(): void
    {
        add_filter('wp_theme_json_data_theme', [$this, 'filterTheme']);
    }

    public function filterTheme(WP_Theme_JSON_Data $themeJson): WP_Theme_JSON_Data
    {
        foreach ($this->blockSettings as $blockName => $settings) {
            $themeJson = $this->blockSettingsUpdater->update(
                $themeJson,
                $blockName,
                array_filter(
                    $settings->getBlockSettings()->toArray(),
                    is_string(...),
                    ARRAY_FILTER_USE_KEY,
                ),
            );
        }

        return $themeJson;
    }
}
