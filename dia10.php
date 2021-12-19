<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicios con PHP</title>
</head>
<body>
  <?php
    $x=12;//entero
    $y=34.3;//rela
    $z=$x+$y;
    echo "<h1>El valor de z es $z</h1>";
    $a = "hola mundo";
    $nombre= "JUAN";
    echo $a." - ".$nombre; // se concatena con el punto (.)

    // condicional if
    if($x > $y){
      echo "<h2>$x esmayor que $y</h2>";
    }
    else{
      echo "<h2>$y esmayor que $x</h2>";
    }

    // iteracion for
    echo "Impresion de la variable nombre = ".$nombre."<br>";
    for($i = 0; $i < strlen($nombre); $i++){
      echo "<br>".$nombre[$i];
    }
  ?>
  <!-- formulario de envio-->

  <form action="procesador.php" method="POST">
    <input type="text" name="edad">
    <button type="submit">
      Enviar datos PHP
    </button>
  </form>
</body>
</html>