# kaiseki/wp-theme-json

Type-safe builder for WordPress `theme.json` settings, styles and block styles, wired through a
PSR-11 container.

Instead of hand-editing a `theme.json` file, you describe the theme `settings` and `styles` as typed
PHP data objects ([`spatie/laravel-data`](https://github.com/spatie/laravel-data)) and let three
`kaiseki/wp-hook` `HookProviderInterface`s push them into WordPress at runtime:

- **`ThemeJsonUpdater`** — merges a `ThemeJsonInterface` provider's `settings`/`styles` into the global
  theme data (the `wp_theme_json_data_theme` filter).
- **`BlockSettingsFilter`** — applies per-block settings (keyed by block name) supplied by
  `BlockSettingsInterface` implementations.
- **`BlockStylesRegistry`** — registers custom block styles (`register_block_style`) on `init`.

## Installation

```bash
composer require kaiseki/wp-theme-json
```

Requires PHP 8.2 or newer.

## Usage

Register `ConfigProvider` with your laminas-style config aggregator, point `theme_json.theme` at your
`ThemeJsonInterface` implementation, and activate the providers you want via `kaiseki/wp-hook`.

```php
use Kaiseki\WordPress\ThemeJson\BlockSettingsFilter;
use Kaiseki\WordPress\ThemeJson\BlockStyleProperties;
use Kaiseki\WordPress\ThemeJson\BlockStylesRegistry;
use Kaiseki\WordPress\ThemeJson\ThemeJsonUpdater;

return [
    'theme_json' => [
        // A service id resolving to a ThemeJsonInterface implementation.
        'theme' => MyThemeJson::class,
        // Per-block settings: block name => BlockSettingsInterface service id.
        'block_settings' => [
            // 'core/button' => MyButtonSettings::class,
        ],
        // Custom block styles: block name => list of BlockStyleProperties.
        'block_styles' => [
            'core/button' => [
                BlockStyleProperties::create(
                    name: 'fill',
                    label: 'Fill',
                    isDefault: true,
                ),
            ],
        ],
    ],
    'hook' => [
        'provider' => [
            ThemeJsonUpdater::class,
            BlockSettingsFilter::class,
            BlockStylesRegistry::class,
        ],
    ],
];
```

Your `ThemeJsonInterface` implementation returns the typed settings and styles objects:

```php
use Kaiseki\WordPress\ThemeJson\Settings\Color;
use Kaiseki\WordPress\ThemeJson\Settings\Color\Palette;
use Kaiseki\WordPress\ThemeJson\Settings\ThemeSettings;
use Kaiseki\WordPress\ThemeJson\Styles\ThemeStyles;
use Kaiseki\WordPress\ThemeJson\ThemeJsonInterface;

final class MyThemeJson implements ThemeJsonInterface
{
    public function getThemeSettings(): ?ThemeSettings
    {
        return new ThemeSettings(
            color: new Color(
                palette: [
                    new Palette(slug: 'primary', color: '#0d6efd', name: 'Primary'),
                    new Palette(slug: 'dark', color: '#212529', name: 'Dark'),
                ],
            ),
        );
    }

    public function getThemeStyles(): ?ThemeStyles
    {
        return new ThemeStyles(css: 'body{line-height:1.6}');
    }
}
```

Null properties are stripped before the data is written, so you only declare the keys you actually set.
`ConfigProvider::__invoke()` returns the factory wiring for all three providers.

## Development

```bash
composer install
composer check   # check-deps, cs-check, phpstan
```

## License

MIT — see [LICENSE](LICENSE.md).
