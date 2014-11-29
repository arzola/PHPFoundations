<?php

//Arrays short form

$a = ['os'=>'cool'];

//Des-referencia de arrays

function getArray($a){
    return $a;
}

$var = getArray($a)['os'];

echo $var; //imprime cool

//Traits

class HelloTrait{
    use Log;
    public function Hello(){
        return 'Hello';
    }
}

trait Log{
    public function sendByMail(){
       return 'Enviadno mail';
    }
    //Pseudo sobre-carga
    public function Hello(){
        parent::Hello();
        return 'Trait';   
    }
}

$cosa = new HelloTrait();

echo $cosa->Hello();
echo $cosa->sendByMail();