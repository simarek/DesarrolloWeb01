<?php
// requiere LANZA EL ERROR SI PASA ALGO
// SE PODIA USAR include PERO NO AYUDA EN ESE CASO DEL ERRRO
require_once('config.php');

class Modelo{

  protected $db;

  public function __construct(){
    $this->db = mysqli_connect(DB_HOST, DB_USUARIO, DB_PWD, DB_NOMBRE, DB_PUERTO);
    if($this->db->connect_errno){
      echo "Error de conexion de base e datos";
    }
    else{
      echo "Conexion efectiva con la BD por test";
    }
  }
}

// $x = new Modelo();

?>