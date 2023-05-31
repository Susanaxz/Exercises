<?php

require_once 'POO.php';


// cuando creamos un objeto desde una clase se le llama instanciar una clase 

$goku = new Saiyajin("Goku", 1000); // creacion del primer objeto desde la clase Saiyajin, esto tiene sus propios metodos y atributos
echo $goku->NivelDePelea();
echo "<br>";

echo $goku->Saludar("mi nombre es ");

// echo $goku->nombre;
// echo "<br>";

// echo $goku->Saludar();

// echo "<br>";

// echo $goku->NivelDePelea();

// var_dump($goku);


// instanciamos otra clase



$vegeta = new Saiyajin('Vegeta', 900);
echo "<br>";
echo $vegeta->NivelDePelea();
echo "<br>";
echo $vegeta->Saludar();





?>