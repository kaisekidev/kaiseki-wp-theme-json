<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson;

use Kaiseki\Config\Config;
use Psr\Container\ContainerInterface;

/**
 * @phpstan-import-type StyleProperties from BlockStyleProperties
 */
final class BlockStylesRegistryFactory
{
    public function __invoke(ContainerInterface $container): BlockStylesRegistry
    {
        $config = Config::fromContainer($container);
        /** @var array<string, list<StyleProperties>> $blockStyles */
        $blockStyles = $config->array('theme_json.block_styles', []);

        return new BlockStylesRegistry($blockStyles);
    }
}
