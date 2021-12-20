<?php
require_once('../components/public_head.php');
require_once('../components/public_top_menu.php');
?>
<!-- INICIO PAGINA PRINCIPAL  -->

<!-- Baner pagina  -->
    <div class="banner">
      <div>
        <h1 class="heading-developer">&lt;Web designer&gt;</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum
          ipsum obcaecati laudantium eum velit odit sed aut culpa quia, officia
          ipsa sit impedit, eos saepe minima ea perferendis quas repellat.
        </p>
      </div>
      <div></div>
      <div>
        <h1 class="heading-developer">&lt;Web designer&gt;</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum
          ipsum obcaecati laudantium eum velit odit sed aut culpa quia, officia
          ipsa sit impedit, eos saepe minima ea perferendis quas repellat.
        </p>
      </div>
    </div>

    <!-- Contenedor de los proyectos -->
    <div class="contenedor_proyectos">
      <h1>
        <i class="fas fa-hammer"></i>
        Mis ultimos trabajos
      </h1>
      <!-- Contenedor de los trabajos -->
      <div class="ultimos_trabajos">
        <!-- trabajo 1 -->
        <div class="work_item">
          <img src="<?= APP_URL?>assets/img/web_ejemplo.jpg" alt="Texto alternativo" />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Consequuntur molestias repellat quidem corporis aliquid beatae
            recusandae, provident reiciendis qui accusantium pariatur nisi
            tempora id ratione fugit, ipsa, ipsum non. Repellendus?
          </p>
          <a class="btn btn_oscuro" href="#">
            <i class="fas fa-eye"></i>
            Ver proyecto
          </a>
        </div>

        <!-- trabajo 2 -->
        <div class="work_item">
          <img src="<?= APP_URL?>assets/img/web_ejemplo1.jpg" alt="Texto alternativo" />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Consequuntur molestias repellat quidem corporis aliquid beatae
            recusandae, provident reiciendis qui accusantium pariatur nisi
            tempora id ratione fugit, ipsa, ipsum non. Repellendus?
          </p>
          <a class="btn btn_oscuro" href="#">
            <i class="fas fa-eye"></i>
            Ver proyecto
          </a>
        </div>

        <!-- trabajo 3 -->
        <div class="work_item">
          <img src="<?= APP_URL?>assets/img/web_ejemplo2.jpg" alt="Texto alternativo" />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Consequuntur molestias repellat quidem corporis aliquid beatae
            recusandae, provident reiciendis qui accusantium pariatur nisi
            tempora id ratione fugit, ipsa, ipsum non. Repellendus?
          </p>
          <a class="btn btn_oscuro" href="#">
            <i class="fas fa-eye"></i>
            Ver proyecto
          </a>
        </div>
      </div>
    </div>
<!-- FIN PAGINA PRINCIPAL  -->

<?php
require_once('../components/public_footer.php');

?>