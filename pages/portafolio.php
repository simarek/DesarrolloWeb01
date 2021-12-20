<?php
require_once('../components/public_head.php');
require_once('../components/public_top_menu.php');

/*
require_once('../modelos/proyecto.php');

$proyecto = new Proyecto();
$x = $proyecto->get_all();
foreach($x as $items){
  
}
*/

?>
<!-- INICIO PORTAFOLIO -->

    <!-- Contenedor iitem 1 -->
    <div class="item_portafolio cols_2_1">
      <div>
        <img
          class="imagen_portafolio"
          src="<?= APP_URL?>assets/img/screenshot.jpg"
          alt="Titulo imagen"
        />
      </div>
      
      <div class="descripcion_proyecto">
        <div>
          <h1>Titulo del proyecto</h1>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus,
            laudantium nam nemo modi rerum reiciendis a perspiciatis quisquam
            reprehenderit iste officia debitis aperiam minima voluptatem animi
            saepe deserunt molestias sed.
          </p>
        </div>
      </div>
    </div>

    <!-- Contenedor item 2 -->
    <div class="item_portafolio cols_1_2 bg_negro">
      <div class="descripcion_proyecto">
        <div>
          <h1>Titulo del proyecto</h1>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus,
            laudantium nam nemo modi rerum reiciendis a perspiciatis quisquam
            reprehenderit iste officia debitis aperiam minima voluptatem animi
            saepe deserunt molestias sed.
          </p>
        </div>
      </div>
      <div>
        <img
          class="imagen_portafolio"
          src="<?= APP_URL?>assets/img/screenshot1.jpg"
          alt="Titulo imagen"
        />
      </div>
    </div>

    <!-- Contenedor iitem 3 -->
    <div class="item_portafolio cols_2_1">
      <div>
        <img
          class="imagen_portafolio"
          src="<?= APP_URL?>assets/img/screenshot2.jpg"
          alt="Titulo imagen"
        />
      </div>
      <div class="descripcion_proyecto">
        <div>
          <h1>Titulo del proyecto</h1>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus,
            laudantium nam nemo modi rerum reiciendis a perspiciatis quisquam
            reprehenderit iste officia debitis aperiam minima voluptatem animi
            saepe deserunt molestias sed.
          </p>
        </div>
      </div>
    </div>

<!-- FIN PORTAFOLIO -->

<?php
require_once('../components/public_footer.php');
?>