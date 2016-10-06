<?php
class ia
{
  //propiedades de las cuales se definen mediante public
  public $columna = 0;
  public $fila = 1;
  //declaracion de un metodo
  //en metodos usamos public function, get pide y return devuelve
  public function getColumna() {
    return $this->columna = rand(1,3);
  }
  public function getFila(){
    //rand, es aleatorio lleva a un codigo el cual hara que sea aleatoria la eleccion entre los parametros que le damos
    return $this->fila = rand(1,3);
  }
}
 ?>
