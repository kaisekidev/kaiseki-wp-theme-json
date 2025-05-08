<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson;

use Spatie\LaravelData\Data;

/**
 * Data Object for WP Block Styles Properties.
 *
 * @see https://developer.wordpress.org/reference/classes/wp_block_styles_registry/register/
 */
/**
 * @phpstan-type StyleProperties array{
 *     name?: string,
 *     label?: string,
 *     inline_style?: string,
 *     style_handle?: string,
 *     is_default?: bool,
 *     style_data?: array<string, mixed>,
 *   }
 */
class BlockStyleProperties
{
    use DataTrait;

    /**
     * @param string               $name
     * @param string               $label
     * @param string               $inlineStyle
     * @param string               $styleHandle
     * @param bool                 $isDefault
     * @param array<string, mixed> $styleData
     *
     * @return StyleProperties
     */
    public static function create(
        string $name,
        string $label,
        ?string $inlineStyle = null,
        ?string $styleHandle = null,
        ?bool $isDefault = false,
        ?array $styleData = null,
    ): array {
        /** @var StyleProperties $result */
        $result = self::deepRemoveNulls([
            'name' => $name,
            'label' => $label,
            'inline_style' => $inlineStyle,
            'style_handle' => $styleHandle,
            'is_default' => $isDefault,
            'style_data' => $styleData,
        ]);

        return $result;
    }
}
