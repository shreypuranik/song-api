<?php

namespace App\Formatter;

/**
 * Class SearchResponseFormatter
 * @package App\Formatter
 */
class SearchResponseFormatter
{
    /**
     * @param array $data
     * @return array
     */
    public static function formatResponseData(array $data): array
    {
        return [
            'total' => count($data),
            'data'  => $data
        ];
    }
}