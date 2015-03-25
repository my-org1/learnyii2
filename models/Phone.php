<?php

namespace app\models ;

class Phone{
    /** @var string */
    public $number = [] ;


    public function __construct($number)
    {
        $this->number = $number;
    }

}