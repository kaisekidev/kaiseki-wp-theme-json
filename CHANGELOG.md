# Changelog

All notable changes to this project are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## 1.0.0 - 2026-06-01

First tagged release, aligned to the kaiseki PHP-8.4 baseline.

### Changed

- BC: raised the PHP floor to `^8.2` (was `>=8.2`; caret style everywhere).
- Pinned internal `kaiseki/config` and `kaiseki/wp-hook` to `^2.0` (were `dev-master`).
- Kept `snicco/str-arr ^1.10` and `spatie/laravel-data ^4.0` — both resolve cleanly on PHP 8.4/8.5.
- Migrated the tooling baseline: PHPStan `^2.0` (level max), PHPUnit `^11.0`,
  `maglnet/composer-require-checker ^4.0`, `szepeviktor/phpstan-wordpress ^2.0`,
  `kaiseki/php-coding-standard ^1.0`.
- Removed the direct `friendsofphp/php-cs-fixer` require (owned by the shared coding standard).
- `phpstan.neon` now includes the shared `kaiseki.neon`; `phpunit.xml` migrated to the PHPUnit 11 schema.
- Added the shared CI caller, `dependabot.yml`, `update-changelog.yml`, and a `check-deps`
  (`composer-require-checker`) setup with a WordPress-symbol whitelist.

### Fixed

- PHPStan level-max findings fixed at the root (no suppression):
  - `BlockSettingsUpdater` narrows `WP_Theme_JSON_Data::get_data()`'s untyped array at runtime before
    reading/writing the nested `settings.blocks` offsets.
  - `BlockSettingsFilter` narrows the spatie `toArray()` result to string keys and moves a misplaced
    promoted-param `@var` to a `@param` docblock.
  - `BlockSettingsFilterFactory` narrows the `Config::initClassMap()` result to string keys.
  - `ThemeJsonUpdaterFactory` replaces an inline `@var` override with an `instanceof` runtime check.
  - `DataTrait` replaces a `@phpstan-ignore-next-line` + `empty()` with a strict `!== []` check.
