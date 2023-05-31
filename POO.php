<?php

 class Saiyajin {

    // modificadores de acceso
    public string $nombre; // asigna un valor de null si no le damos valor 
    public int $nivel_pelea;


    // metodo constructor siempre es publico. metodo magico que se ejecuta cuando se crea un objeto desde una clase lo creamos despues de los atributos
    public function __construct($nombre, $nivel_pelea) {// parametros que recibe el metodo constructor 
        $this->nombre = $nombre;
        $this->nivel_pelea = $nivel_pelea;
    }

    // creamos el metodo y colocamos un modificador de acceso

    public function Saludar($texto='Hola soy ') { // si queremos tiparla --- public function Saludar():string {}
        return $texto.$this->nombre; // .this para acceder a estos atributos o metodos

    }

    public function NivelDePelea() {
        return $this->nombre . " tiene un nivel de pelea de " . $this->nivel_pelea;

    }

 }


 class SuperSaiyajin extends Saiyajin { // hereda de la clase Saiyajin

    public int $nivel_pelea; // sobreescribimos el atributo nivel_pelea

    public function __construct($nombre, $nivel_pelea) {
        parent::__construct($nombre, $nivel_pelea); // llamamos al constructor de la clase padre
        $this->nivel_pelea = $nivel_pelea * 10; // sobreescribimos el atributo nivel_pelea
    }

    public function NivelDePelea() {
        return $this->nombre . " tiene un nivel de pelea de " . $this->nivel_pelea;
    }

 }

 $gohan = new SuperSaiyajin('Gohan', 1000);
 echo $gohan->NivelDePelea();
