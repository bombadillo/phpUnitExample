<?php

namespace phpUnitExample\Service;

class StringHelper
{
    public function toUpper($string)
    {
        $stringUpper = strtoupper($string);

        return $stringUpper;
    }
}