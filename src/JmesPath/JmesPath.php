<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\JmesPath;

/*
 * Returns data from the input array that matches a JMESPath expression.
 *
 * @param  string  $expression  Expression to search.
 * @param  mixed  $data  Data to search.
 *
 * @return mixed|null
 */

use function function_exists;

if (!function_exists(__NAMESPACE__ . '\search')) {
    function search($expression, $data)
    {
        return Env::search($expression, $data);
    }
}
