<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MonkeyCafe</title>
    <link rel="icon" type="image/png" href="../img/logo/monkkeycafelogo_noName.png" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fugaz+One&family=Supermercado+One&display=swap"
      rel="stylesheet" />
    <link rel="stylesheet" href="../css/styles-base.css" />
    <link rel="stylesheet" href="../css/styles-promos.css" />
  </head>

  <body>
    <!--  -->
    <!-- header -->
    <header class="p-1 border-bottom border-black sticky-lg-top">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a
            href="../index.html"
            class="d-flex align-items-center mb-2 me-5 mb-lg-0 link-body-emphasis text-decoration-none">
            <img src="../img/logo/monkkeycafelogo.png" width="100" class="" alt="" />
          </a>
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 fs-4">
            <li>
              <a href="../index.html" class="nav-link px-2 link-body-emphasis">Inicio</a>
            </li>
            <li>
              <a href="#" class="nav-link px-2 link-body-emphasis">Menu</a>
            </li>
            <li>
              <a href="./promos.html" class="nav-link px-2 link-active">Promociones</a>
            </li>
          </ul>
          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input
              type="search"
              class="form-control search-form"
              placeholder="Search..."
              aria-label="Search" />
          </form>
          <a href="#" class="link-body-emphasis fs-2"><i class="bi bi-bag-fill"></i></a>
        </div>
      </div>
    </header>

    <!-- Body -->
    <main>
      <div class="container py-2">
        <h2 class="fs-1 mt-3">Combos de temporada</h2>
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <!-- Card 1 -->
          <div class="col">
            <div class="card text-bg-dark">
              <img src="../img/promos/CroissantFrappe.jpeg" class="card-img" alt="..." />
              <div class="card-img-overlay d-flex align-items-end">
                <a
                  class="card-title fs-2 p-2"
                  data-bs-toggle="collapse"
                  href="#almuerzoParis"
                  role="button"
                  aria-expanded="false"
                  aria-controls="collapseExample">
                  Almuerzo en paris
                </a>
              </div>
            </div>
            <div class="collapse col-12 vt" id="almuerzoParis">
              <div class="card card-body">
                <p class="m-0 fs-5">Frappe de caramelo acompañado de un croissant preparado con huevo</p>
              </div>
            </div>
          </div>
          <!-- Card 2 -->
          <div class="col">
            <div class="card text-bg-dark">
              <img src="../img/promos/EggBagelMilkshake.jpeg" class="card-img" alt="..." />
              <div class="card-img-overlay d-flex align-items-end">
                <a
                  class="card-title fs-2 p-2"
                  data-bs-toggle="collapse"
                  href="#granManzana"
                  role="button"
                  aria-expanded="false"
                  aria-controls="collapseExample"
                  >Desayuno gran manzana</a
                >
              </div>
            </div>
            <div class="collapse col-12 vt" id="granManzana">
              <div class="card card-body">
                <p class="m-0 fs-5">Malteada de vainilla acompañado de un bagel de huevo revuelto</p>
              </div>
            </div>
          </div>
          <!-- Card 3 -->
          <div class="col">
            <div class="card text-bg-dark">
              <img src="../img/promos/CiabattaMimosa.jpeg" class="card-img" alt="..." />
              <div class="card-img-overlay d-flex align-items-end">
                <a
                  class="card-title fs-2 p-2"
                  data-bs-toggle="collapse"
                  href="#mediterraneo"
                  role="button"
                  aria-expanded="false"
                  aria-controls="collapseExample"
                  >Brunch mediterraneo</a
                >
              </div>
            </div>
            <div class="collapse col-12" id="mediterraneo">
              <div class="card card-body">
                <p class="m-0 fs-5">Chapata preparada acompañada por una mimosa</p>
              </div>
            </div>
          </div>
          <!--  -->
        </div>
      </div>
      <div class="container">
        <h2 class="fs-1 mt-2">Paquetes del dia</h2>
      </div>
    </main>

    <!-- footer -->
    <div class="footer border-top border-black">
      <footer class="pt-5">
        <div class="row">
          <div class="col-6 col-md-2 mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-body-secondary">Home</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-body-secondary">Features</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-body-secondary">Pricing</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-body-secondary">FAQs</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-body-secondary">About</a>
              </li>
            </ul>
          </div>
          <div class="col-6 col-md-2 mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-body-secondary">Home</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-body-secondary">Features</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-body-secondary">Pricing</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-body-secondary">FAQs</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-body-secondary">About</a>
              </li>
            </ul>
          </div>
          <div class="col-6 col-md-2 mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-body-secondary">Home</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-body-secondary">Features</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-body-secondary">Pricing</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-body-secondary">FAQs</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-body-secondary">About</a>
              </li>
            </ul>
          </div>
          <div class="col-md-5 offset-md-1 mb-3">
            <form>
              <h5>Registrate a nuestras noticias</h5>
              <p>Avisos de novedades, promociones y otras noticias.</p>
              <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                <label for="newsletter1" class="visually-hidden">Email address</label>
                <input
                  id="newsletter1"
                  type="text"
                  class="form-control search-form"
                  placeholder="Email"
                  style="cursor: auto"
                  data-temp-mail-org="0" />
                <button class="btn btn-primary" type="button">Registrar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="d-flex flex-column flex-sm-row justify-content-between pt-4 mb-4 border-top border-black">
          <p>© 2024 MonkeyCafe, Inc. All rights reserved.</p>
          <ul class="list-unstyled d-flex">
            <li class="ms-3 socials">
              <a class="link-body-emphasis" href="#"><i class="bi bi-twitter"></i></a>
            </li>
            <li class="ms-3 socials">
              <a class="link-body-emphasis" href="#"><i class="bi bi-instagram"></i></a>
            </li>
            <li class="ms-3 socials">
              <a class="link-body-emphasis" href="#"><i class="bi bi-facebook"></i></a>
            </li>
          </ul>
        </div>
      </footer>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
  </body>
</html>
