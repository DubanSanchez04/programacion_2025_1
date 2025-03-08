<?php

function saludar(){
    echo 'hola<br>';
}

saludar();

function getsaludo(){
    return 'Hola';
}

echo getsaludo();

function saludar2($nombre){
    echo "hola $nombre<br>";
}
saludar2("pepe");

function saludar3($nombre,$apellido){
    echo "hola $nombre $apellido <br>";
}
saludar3('Pepe','ABC');

function saludarcuatro($nombre,$apellido=null){
    if(empty($apellido)){
        echo "hola $nombre  <br>";
    }else{
        echo "hola $nombre $apellido <br>";
    }
}
saludarcuatro('pepe','CBA');
saludarcuatro('ana');

function saludarCinco(...$params){
    $nombre=$params[0];
    $apellido=$params[1];
    $edad=$params[2];
    echo "hola $nombre $apellido <br>";
}
saludarCinco("pedro",25,"si",1.80,false);

function saludarseis(string $nombre, int $edad){
    echo "hola $nombre<br>";
}



