<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson;

use Kaiseki\WordPress\Hook\HookProviderInterface;
use WP_Theme_JSON_Data;

use function add_filter;

final readonly class BlockSettingsFilter implements HookProviderInterface
{
    public function __construct(
        private BlockSettingsUpdater $blockSettingsUpdater,
        /** @var array<string, BlockSettingsInterface> */
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
                $settings->getBlockSettings()->toArray(),
            );
        }

        return $themeJson;
    }
}
