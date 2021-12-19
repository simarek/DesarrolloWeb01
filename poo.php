<?php

abstract class Coche{
  
  protected $x; // accesible solo por la clases y los que heredan
  private $marca; // accesibles solo por la clase
  public $color; // de acceso publico
  public static $modelo = 'furgoneta'; // no ncesita la instanciacnion de una clase coche

  public function __construct($mar, $col) {
    $this->marca=$mar;
    $this->color=$col;
  }

  // por encapsualcion dedatos
  public function set_marca($m){
    $this->marca=$m;
  }

  public function get_marca(){
    return $this->marca;
  }


  // Llamado de datos por metodo estatico
  // metodo acelerar 
  // public static function acelerar(){
  //   echo "<h3>Acelerando el coche</h3>";
  // }

}

interface Acciones_coche{
  public function acelerar();
}

trait bocinas_graves{
  public function grave1(){
    echo "<br>Tocando bocina grave 1";
  }
}

trait bocinas_agudas{
  public function aguda1(){
    echo "<br>Tocando bocina aguda 1";
  }
}

// haciendo herencia
class Todoterreno extends Coche implements Acciones_coche {
  use bocinas_agudas, bocinas_graves;

  private $traccion;

  public function __construct($mar, $col, $tra = '4x4'){
    parent::__construct($mar, $col);
    $this->traccion = $tra;
  }

  public function activa_doble_traccion(){
    echo "<br>Activando traccion: ".$this->traccion;
  }

  public function acelerar(){
    echo "<h3>Acelerando el coche todo terreno</h3>";
  }

}

echo "<h1>Instancia de la clase Todoterreno</h1>";
// $a = new Coche('Toyota', ' Rojo');
// echo $a->get_marca()."<br>";
// echo $a->color."<br>";

// echo Coche::$modelo."<br>";
// Coche::acelerar();

$b = new Todoterreno('Nissan', 'Negro');
$b->acelerar(); // metodo de interface
$b->activa_doble_traccion(); // metodo de la clase todoterreno
$b->aguda1(); // trails
$b->grave1(); // trails

?>