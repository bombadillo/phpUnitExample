<?php

namespace phpUnitExample\Gateway;

use phpUnitExample\Service\StringHelper;

class App
{
    public static function start()
    {
        $stringHelper = new StringHelper();

        $string = 'Captitalise me!';

        echo $stringHelper->toUpper($string);        
    }
}
