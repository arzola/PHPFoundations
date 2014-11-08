<?php
namespace U;

$nombre = 'Oscar';

function say(){
    return ' adios';
}

namespace P;

echo 'hola '.$nombre . \U\say();