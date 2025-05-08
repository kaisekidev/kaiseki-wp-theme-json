<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson;

final class ConfigProvider
{
    /**
     * @return array<mixed>
     */
    public function __invoke(): array
    {
        return [
            'theme_json' => [
                // 'theme' => ThemeJsonInterface::class,
                'block_settings' => [
                    // 'core/button' => BlockSettingsInterface::class,
                ],
                'block_styles' => [
                    // 'core/button' => [
                    //     BlockStyleProperties::create(
                    //         name: 'fill',
                    //         label: 'Fill',
                    //         isDefault: true,
                    //     ),
                    //     BlockStyleProperties::create(
                    //         name: 'fill-lg',
                    //         label: 'Fill Large',
                    //         isDefault: true,
                    //     ),
                    // ],
                ],
            ],
            'hook' => [
                'provider' => [
                    // BlockSettingsFilter::class,
                    // BlockStylesRegistry::class,
                    // ThemeUpdater::class,
                ],
            ],
            'dependencies' => [
                'aliases' => [
                    // ThemeProviderInterface::class => ThemeProvider::class,
                ],
                'factories' => [
                    BlockSettingsFilter::class => BlockSettingsFilterFactory::class,
                    BlockStylesRegistry::class => BlockStylesRegistryFactory::class,
                ],
            ],
        ];
    }
}
