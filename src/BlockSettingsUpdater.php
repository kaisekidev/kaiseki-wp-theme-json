<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson;

use WP_Theme_JSON_Data;

use function is_array;
use function sprintf;
use function wp_trigger_error;

use const E_USER_WARNING;

final readonly class BlockSettingsUpdater
{
    /**
     * @param WP_Theme_JSON_Data   $themeJson
     * @param string               $name
     * @param array<string, mixed> $blockSettings
     *
     * @return WP_Theme_JSON_Data
     */
    public function update(
        WP_Theme_JSON_Data $themeJson,
        string $name,
        array $blockSettings,
    ): WP_Theme_JSON_Data {
        if ($this->blockNameExists($themeJson, $name)) {
            wp_trigger_error(
                'Kaiseki\WordPress\ThemeJson\BlockSettingsFilter->filterTheme',
                sprintf(
                    'Block name %s already exists in theme.json',
                    $name,
                ),
                E_USER_WARNING,
            );

            return $themeJson;
        }

        $data = $themeJson->get_data();
        $settings = is_array($data['settings'] ?? null) ? $data['settings'] : [];
        $blocks = is_array($settings['blocks'] ?? null) ? $settings['blocks'] : [];
        $blocks[$name] = $blockSettings;
        $settings['blocks'] = $blocks;
        $data['settings'] = $settings;

        return $themeJson->update_with($data);
    }

    public function blockNameExists(
        WP_Theme_JSON_Data $themeJson,
        string $name,
    ): bool {
        $data = $themeJson->get_data();
        $settings = is_array($data['settings'] ?? null) ? $data['settings'] : [];
        $blocks = is_array($settings['blocks'] ?? null) ? $settings['blocks'] : [];

        return isset($blocks[$name]);
    }
}
