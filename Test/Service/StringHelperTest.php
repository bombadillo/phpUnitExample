<?php

namespace phpUnitExample\Test;

use phpUnitExample\Service\StringHelper;

class URLTest extends \PHPUnit_Framework_TestCase
{
    public function testSluggifyReturnsSluggifiedString()
    {
        $originalString = 'This string will be uppercase';
        $expectedResult = 'THIS STRING WILL BE UPPERCASE';

        $StringHelper = new StringHelper();

        $result = $StringHelper->toUpper($originalString);

        $this->assertEquals($expectedResult, $result);
    }
}