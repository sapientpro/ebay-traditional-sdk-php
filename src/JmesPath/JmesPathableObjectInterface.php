<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\JmesPath;

interface JmesPathableObjectInterface
{
    public function __get($name);

    public function __set($name, $value);

    public function __isset($name);

    public function __toString();

    public function toArray();
}
