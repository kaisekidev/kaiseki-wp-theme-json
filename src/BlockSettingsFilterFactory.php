<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson;

use Kaiseki\Config\Config;
use Psr\Container\ContainerInterface;

use function array_filter;
use function is_string;

use const ARRAY_FILTER_USE_KEY;

final class BlockSettingsFilterFactory
{
    public function __invoke(ContainerInterface $container): BlockSettingsFilter
    {
        $config = Config::fromContainer($container);
        /** @var array<string, class-string<BlockSettingsInterface>> $blockSettings */
        $blockSettings = $config->array('theme_json.block_settings', []);
        $instances = array_filter(
            Config::initClassMap($container, $blockSettings),
            is_string(...),
            ARRAY_FILTER_USE_KEY,
        );

        return new BlockSettingsFilter(
            $container->get(BlockSettingsUpdater::class),
            $instances,
        );
    }
}
