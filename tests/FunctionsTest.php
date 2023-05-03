<?php

namespace SapientPro\EbayTraditionalSDK\Test;

use PHPUnit\Framework\TestCase;

use function SapientPro\EbayTraditionalSDK\arrayMergeDeep;

class FunctionsTest extends TestCase
{
    public function testArrayMergeDeepArray()
    {
        $a = ['a' => 'b', 'c' => ['d' => 'e']];
        $b = ['c' => ['f' => 'g']];

        $merged = arrayMergeDeep($a, $b);

        $this->assertEquals([
            'a' => 'b',
            'c' => ['d' => 'e', 'f' => 'g'],
        ], $merged);
    }
}
