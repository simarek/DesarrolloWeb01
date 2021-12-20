<?php

require_once('categoria.php');

$cat = new Categoria();

$data['cat_nombre'] = 'Peliculas'; //agregando una nueva categoria a la BD
$data['cat_a'] = 'A';
$data['cat_b'] = 'B';

// crea la nueva catgoria
// $cat->store($data);

// retornar todos los registros listar los elementos
$categorias = $cat->get_all(); // array asociativo // array bidimencional

// [0] = ['cat_id':['1'], ];
// foreach($categorias as $item){
//   echo $item['cat_id']; //array unidimenciosnal
// }

?>

<table>
  <tr>
    <th>ID</th>
    <th>NOMBRE CATEGORIA</th>
  </tr>
    <?php foreach($categorias as $item):?>
  <tr>
    <td><?php echo $item['cat_id']?></td>
    <td><?= $item['cat_nombre']?></td>
  </tr>
  <?php endforeach;?>
</table>