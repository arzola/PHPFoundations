<?php


function ajax($url,$llamada){
    $data = file_get_contents($url);
    if($data){
        $llamada(array('success'=>true,'data'=>$data));
    }else{
        $llamada(array('success'=>false));
    }
}

ajax('http://icode.mx',function($response){
    if($response['success']){
        print_r($response['data']);
    }else{
        echo 'No existe';
    }
});