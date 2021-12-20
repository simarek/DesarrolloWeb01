<?php

require_once('../modelos/articulo.php');

// PROCESAR PROYECTOS
// SE USARA LA VARIABLE GLOBAL SERVER

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $op = $_POST['operacion'];
  switch($op){
    case "store":
      // XSS CROSS Site Scriptinn
      echo "<h1>Ejecutando instrucciones de STORE</h1>";
      // crar array de oobjetos en $data
      $data['art_titulo'] = htmlspecialchars($POST['art_titulo']);
      //$articulo =new Articulo();
      //$articulo->store($data);
      break;
    
    case "update":
      echo "<h1>Ejecutando instrucciones de UPDATE</h1>";
      break;

    case "delete":
      echo "<h1>Ejecutando instrucciones de DELETE</h1>";
      break;

    default:
      //header("HTTP/1.0 404 Not found");
      echo "No exsiste esta operacion";
  }
}
else{
  //header("HTTP/1.0 403 Forbidden");
  echo "Eta operacion no esta permititda";
}

?>