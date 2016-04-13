<?php

namespace phpUnitExample;

class StringHelper
{
    public function toUpper($string)
    {
        $stringUpper = strtoupper($string);

        return $stringUpper;
    }
}