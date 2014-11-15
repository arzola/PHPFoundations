<?php

$intentos = 1;
$pago = false;
pagos: {
    //Bloque procesador de pagos
    echo "Intento {$intentos} de pago </br>";
    $intentos++;
    //LLAMADA Webservice mediante SOAP, REST
}

while (true !== $pago) {
    if (5 != rand(0, 10)) {
        goto pagos;
    } else {
        goto exito;
    }
}

exito: {
    echo 'Pago exitoso';
}
