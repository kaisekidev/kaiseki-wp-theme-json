<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ThemeJson;

use Snicco\Component\StrArr\Arr;

use function is_array;

trait DataTrait
{
    /**
     * @param array<string, mixed> $array
     *
     * @return array<string, mixed>
     */
    private static function deepRemoveNulls(array $array): array
    {
        $result = [];

        foreach ($array as $key => $value) {
            if ($value === null) {
                continue;
            }

            if (is_array($value) && Arr::isAssoc($value)) {
                $cleanedValue = self::deepRemoveNulls($value);

                // @phpstan-ignore-next-line
                if (!empty($cleanedValue)) {
                    $result[$key] = $cleanedValue;
                }

                continue;
            }

            $result[$key] = $value;
        }

        return $result;
    }
}
