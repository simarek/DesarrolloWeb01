<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Nuevo articulo</h1>
  <form action="proc_articulos.php" method="POST">
    <input type="hidden" name="operacion" value="store">
    <input type="text" name="art_titulo">
    <button type="submit">Guardar datos</button>
  </form>
</body>
</html>