<?php

//review type hinting
//http://php.net/manual/es/language.oop5.typehinting.php
//Usarse con clases e Interfaces

function suma(int $v, float $v2){
    return $v + $v2;
}

echo suma(1+3);
