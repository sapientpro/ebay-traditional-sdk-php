<?php

namespace SapientPro\EbayTraditionalSDK\Tests\Mocks;

class StaticMethods
{
    public static function defaultConfigValue($configuration)
    {
        return -1;
    }

    public static function applyConfigValue($value, array &$configuration)
    {
        $configuration['foo'] = 3;
    }
}
