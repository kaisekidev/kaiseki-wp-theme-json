<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson;

use Kaiseki\Config\Config;
use Psr\Container\ContainerInterface;

final class ThemeJsonUpdaterFactory
{
    public function __invoke(ContainerInterface $container): ThemeJsonUpdater
    {
        $config = Config::fromContainer($container);
        /** @var ThemeJsonInterface $theme */
        $theme = $container->get($config->string('theme_json.theme'));

        return new ThemeJsonUpdater($theme);
    }
}
