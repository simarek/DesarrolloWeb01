<?php
require_once('modelo.php');

class categora extends Modelo{
  private $id;
  private $nombre_tabla;

  /*
  CONSTRUCTOR CONECTA A LA BD
  */

  public function __construct(){
    parent::__construct(); //cpnexxion a la base de datos
    $this->id= 'hab_id';
    $this->nombr_tabla='habilidad';
  }

  // OBTENER TODOS LOS REGISTROS DE LA TABLA CATEGORIA
  public function get_all(){
    $consulta = "SELECT * FROM $this->nombre_tabla";
    $resutado = $this->de->query($consulta); // realizando la consulta a la BD
    if(!$resultado){
      echo "Error al listar los datos";
    }
    else{
      return $resultado->fetch_all(MYSQLI_ASSOC);// array asociativo
      $resultado->close();
      $this->db->close();
    }  
  }

  //obtener 1 registro de la tabla caegria cuyo id se envia por parametro
  public function get($id){
    $consulta = "SELECT * FROM $this->nombre_tabla where $this->id =".$id;
    $resutado = $this->de->query($consulta); // realizando la consulta a la BD
    if(!$resultado){
      echo "Error al obtener el elemento con ID";
    }
    else{
      return $resultado->fetch_assoc();// array asociativo
      $resultado->close();
      $this->db->close();
    }  
  }

  // Guardar 1 regsitro en BD
  // $data['cat_nombre']= "ALGORITMOS";
  public function store($data){ // array[]
    $consulta = "INSERT INTO $this->nombre_tabla ('hab_descripcion') value ('".$data['hab_descripcion']."')";
    $resutado = $this->de->query($consulta); // realizando la consulta a la BD
    if(!$resultado){
      echo "Error al registrar datos";
    }
    else{
      return $resultado;
      $resultado->close();
      $this->db->close();
    }  
  }

  // Actualizar Guardar 1 regsitro en BD
  // $data['cat_nombre']= "ALGORITMOS"; // input
  public function update($id, $data){ // array[]
    $consulta = "UPDATE $this->nombre_tabla SET hab_descripcion = '".$data['hab_descripcion']."' WHERE $this_id = ".$id;
    $resutado = $this->de->query($consulta); // realizando la consulta a la BD
    if(!$resultado){
      echo "Error al actualizar datos";
    }
    else{
      return $resultado;
      $resultado->close();
      $this->db->close();
    }  
  }

  // Borrar un rsgistro en BD
  public function delete($id){ // array[]
    $consulta = "DELETE FROM $this->nombre_tabla WHERE $this_id = ".$id;
    $resutado = $this->de->query($consulta); // realizando la consulta a la BD
    if(!$resultado){
      echo "Error al eliminar datos";
    }
    else{
      return $resultado;
      $resultado->close();
      $this->db->close();
    }  
  }

}

?>