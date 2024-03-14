<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News - Ecomania</title>

    <link href="<?=ROOT?>/../public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
          <img src="<?=ROOT?>/../public/assets/imgs/icon.png" alt="" width="70" height="67">
        </a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="<?=ROOT?>/home" class="nav-link px-2 link-success">Home</a></li>
        <li><a href="#" class="nav-link px-2 link-secondary">News</a></li>
        <li><a href="<?=ROOT?>/about" class="nav-link px-2 link-success">About</a></li>
        <li><a href="<?=ROOT?>/contact" class="nav-link px-2 link-success">Contact</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <a href="<?=ROOT?>/login"><button type="button" class="btn btn-success me-2">Login</button></a>
      </div>
    </header>


<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">News</h1>
        <p class="lead text-body-secondary">In this section, you will find current news highlights on one of the most pressing challenges facing our planet: climate change. Focusing our attention on Goal 13 of the UN's 2030 Agenda, "Climate Action," we aim to explore how this global phenomenon, accelerated by human activities such as the burning of fossil fuels and deforestation, is significantly impacting Mexico and the world.</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?=ROOT?>/../public/assets/imgs/GEI2.jpg" alt="" width="420" height="200" style="padding-left: 0px; object-fit: cover;";">
            <div class="card-body">
              <p class="card-text">Este apartado destaca las noticias más impactantes sobre el cambio climático, resaltando el papel crucial de los gases de efecto invernadero en el calentamiento global.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?=ROOT?>/../public/assets/imgs/EnergiaRen.jpg" alt="" width="420" height="200" style="padding-left: 0px; object-fit: cover;";">
            <div class="card-body">
              <p class="card-text">En este apartado, examinaremos como las tendencias más recientes en energías renovables y la transición energética está allanando el camino hacia un futuro sostenible.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?=ROOT?>/../public/assets/imgs/biodiversidad.jpg" alt="" width="420" height="200" style="padding-left: 0px; object-fit: cover;";">
            <div class="card-body">
              <p class="card-text">En este segmento, exploraremos relatos inspiradores sobre conservación de ecosistemas y protección de la biodiversidad. Desde iniciativas locales hasta esfuerzos globales.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="<?=ROOT?>/../public/assets/imgs/Agricultura-sostenible.jpg" alt="" width="420" height="200" style="padding-left: 0px; object-fit: cover;";">
            <div class="card-body">
              <p class="card-text">En este espacio, nos centraremos en la agricultura y las prácticas agrícolas sostenibles, resaltando cómo las innovaciones y estrategias ecológicas están revolucionando la producción de alimentos.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?=ROOT?>/../public/assets/imgs/EAM.jpg" alt="" width="420" height="200" style="padding-left: 0px; object-fit: cover;";">
            <div class="card-body">
              <p class="card-text">En esta sección descubre cómo el conocimiento y la conciencia sobre temas medioambientales están capacitando a individuos y comunidades para tomar decisiones más responsables y comprometidas con el cuidado del planeta.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?=ROOT?>/../public/assets/imgs/politicas.jpg" alt="" width="420" height="200" style="padding-left: 0px; object-fit: cover;";">
            <div class="card-body">
              <p class="card-text">En este apartado, exploraremos el ámbito de la política y las regulaciones climáticas a nivel nacional e internacional. Descubre cómo los marcos legislativos y los acuerdos globales están estableciendo las bases para una acción climática efectiva.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="<?=ROOT?>/../public/assets/imgs/movilidad-urbana.png" alt="" width="420" height="200" style="padding-left: 0px; object-fit: cover;";">
            <div class="card-body">
              <p class="card-text">
En este apartado, exploraremos el tema del transporte sostenible y la movilidad urbana, destacando la necesidad de desplazamientos eficientes y respetuosos con el medio ambiente en entornos urbanos.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?=ROOT?>/../public/assets/imgs/aguaSOS.jpg" alt="" width="420" height="200" style="padding-left: 0px; object-fit: cover;";">
            <div class="card-body">
              <p class="card-text">En este apartado, nos adentraremos en la gestión sostenible de los recursos hídricos, un aspecto crucial para la supervivencia y bienestar de nuestro planeta.Veremos estrategias y tecnologías avanzadas para su conservación y uso eficiente.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?=ROOT?>/../public/assets/imgs/justiciaCLIM.jpg" alt="" width="420" height="200" style="padding-left: 0px; object-fit: cover;";">
            <div class="card-body">
              <p class="card-text">En este apartado, abordamos la justicia climática y la equidad en la lucha contra el cambio climático, asegurando soluciones inclusivas y equitativas para todas las comunidades, especialmente las más vulnerables.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="container text-body-secondary py-3">
<div class="row">
        <div class="col-lg-4">
            <h5>Conócenos</h5>
            <p><a href="#">Quiénes somos</a></p>
            <p><a href="#">Noticias</a></p>
        </div>
        <div class="col-lg-4">
            <h5>Términos y condiciones</h5>
            <p><a href="#">Políticas de privacidad</a></p>
            <p>&copy; 2024 Universidad de Colima, Inc. Ecomania</p>
        </div>
        <div class="col-lg-4">
            <h5>Contactanos</h5>
            <p>ucol@ucol.mx</p>
            <p>Manzanillo, Colima</p>
        </div>
    </div>
    <p class="float-end"><a href="#">Volver arriba</a></p>
  </footer>
<script src="<?=ROOT?>/../public/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
