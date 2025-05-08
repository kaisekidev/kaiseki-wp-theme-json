<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson;

use Kaiseki\Config\Config;
use Psr\Container\ContainerInterface;

final class BlockSettingsFilterFactory
{
    public function __invoke(ContainerInterface $container): BlockSettingsFilter
    {
        $config = Config::fromContainer($container);
        /** @var array<string, class-string<BlockSettingsInterface>> $blockSettings */
        $blockSettings = $config->array('theme_json.block_settings', []);

        return new BlockSettingsFilter(
            $container->get(BlockSettingsUpdater::class),
            Config::initClassMap($container, $blockSettings),
        );
    }
}
