<?php

// require_once PERMITE INCLUIR EL CODIGO DEL ARCHIVO PHP
require_once('modelo.php');

class Red extends Modelo{
  private $id;
  private $nombre_tabla;

  /*
  CONSTRUCTOR
  Description: Conecta a la base de datos
  */

  public function __construct(){
    parent::__construct(); //conexion a la base de datos
    $this->id = 'red_id';
    $this->nombre = 'red_nombre';
    $this->imagen = 'red_imagen_class';
    $this->nombre_tabla ='categoria';
    
  }

  // METODO PARA OBTENER TODOS LOS REGISTROS DE LA TABLA CATEGORIA
  public function get_all(){
    $consulta = "SELECT * FROM $this->nombre_tabla";
    $resultado = $this->db->query($consulta); // realizando la consulta a la BD
    if(!$resultado){ // !true si hay error 
      echo "Error al listar los datos";
    }
    else{
      return $resultado->fetch_all(MYSQLI_ASSOC);// objeto, array simple o "array asociativo"
      // con asociativo devolvera tuplas de datos x[0]='cat_id'
      $resultado->close();
      $this->db->close();
    }  
  }

  //OBTEBER UN REGISTRO DE LA TABALA CATEGORIA CUYO ID SE ENVIA POR PARAMETRO
  public function get($id){
    $consulta = "SELECT * FROM $this->nombre_tabla WHERE $this->id =".$id;
    $resultado = $this->db->query($consulta); // realizando la consulta a la BD
    if(!$resultado){
      echo "Error al obtener el elemento con ID";
    }
    else{
      return $resultado->fetch_assoc();// array asociativo: retorna una tupla o un registro
      $resultado->close();
      $this->db->close();
    }  
  }

  // Guardar 1 registro en BD
  // $data['cat_nombre'] = "ALGORITMOS"; ENTRA DESDE EL
  // $data['cat_otro'] = algo
  public function store($data){ // $data es un array[]

    $consulta = "INSERT INTO $this->nombre_tabla (red_nombre, red_imagen_class) VALUES ('".$data['red_nombre']."','".$data['red_iamgen_class']."');";
    $resultado = $this->db->query($consulta); // retrone el resultado a la BD
    if(!$resultado){
      echo "Error al registrar datos";
    }
    else{
      return $resultado;
      $resultado->close();
      $this->db->close();
    }  
  }

  // Actualizar un1 regsitro en BD
  public function update($id, $data){ //id y array[] de datos
    $consulta = "UPDATE $this->nombre_tabla SET red_nombre = '".$data['red_nombre']."', red_imagen_class = '".$data['red_imagen_class']."'  WHERE $this->id = ".$id;
    $resultado = $this->db->query($consulta); // realizando la consulta a la BD
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
    $consulta = "DELETE FROM $this->nombre_tabla WHERE $this->id = ".$id;
    $resultado = $this->db->query($consulta); // realizando la consulta a la BD
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