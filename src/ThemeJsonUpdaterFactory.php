<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson;

use Kaiseki\Config\Config;
use Psr\Container\ContainerInterface;
use RuntimeException;

use function sprintf;

final class ThemeJsonUpdaterFactory
{
    public function __invoke(ContainerInterface $container): ThemeJsonUpdater
    {
        $config = Config::fromContainer($container);
        $theme = $container->get($config->string('theme_json.theme'));

        if (!$theme instanceof ThemeJsonInterface) {
            throw new RuntimeException(sprintf(
                'The "theme_json.theme" service must implement %s.',
                ThemeJsonInterface::class,
            ));
        }

        return new ThemeJsonUpdater($theme);
    }
}
