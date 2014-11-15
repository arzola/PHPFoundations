<?php

/**
 * Limitar llamadas a funciones que solo deseamos se puedan llamar si otra es valida
 */

function procesaPago($total){
    function calculaIvaPago(){
        return "cargando IVA </br>";
    }
    return "procesando pago por $total</br>";
}

echo procesaPago(100);
echo calculaIvaPago();
