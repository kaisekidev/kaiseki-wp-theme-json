<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson;

use Kaiseki\WordPress\Hook\HookProviderInterface;

use function add_action;
use function register_block_style;

/**
 * @phpstan-import-type StyleProperties from BlockStyleProperties
 */
final readonly class BlockStylesRegistry implements HookProviderInterface
{
    /**
     * @param array<string, list<StyleProperties>> $blockStyles
     */
    public function __construct(
        private array $blockStyles,
    ) {
    }

    public function addHooks(): void
    {
        add_action('init', [$this, 'registerBlockStyles'], 20);
    }

    public function registerBlockStyles(): void
    {
        foreach ($this->blockStyles as $blockName => $styles) {
            foreach ($styles as $style) {
                register_block_style($blockName, $style);
            }
        }
    }
}
