<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ZET</title>
    <link rel="stylesheet" href="./styles.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
      rel="stylesheet"
    />
  </head>

  <body>
    <!-- Header Ariel section -->
    <header class="container-fluid w-100 text-center align-content-center header-background-image text-light" id="home">
      <div class="row">
        <!-- GRID DU HEADER AVEC DES ESPACES POUR METTRE EN PAGE LE CONTENU -->
        <div class="col-2"><!-- spacer --></div>
        <!-- LOGO AVEC LIEN "HOME" -->
        <div class="col-4 mt-5 mb-5 text-start">
          <a href="#home">
            <img src="img/Header/logo.png" alt="home-logo" />
          </a>
        </div>
        <!-- MENU AVEC LE LIEN À DEFINIR OU FENETRE A DEFINIR -->
        <nav class="navbar navbar-light offset-lg-3 col-lg-2 offset-sm-0 col-sm-12 justify-content-center">
          <button
            class="navbar-toggler custom-toggler border-0 text-white"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbar"
            aria-controls="navbar"
            aria-expanded="false"
            aria-label="Navbar navigation"
          > MENU 
            <span class="text-white"><i class="bi bi-list"></i></span>
          </button>
        </nav>
        <div class="collapse" id="navbar">
          <div class="p-4">
            <div class="fs-4">
              <a href="#services" class="text-white">Connexion</a>
            </div>
            <div class="fs-4">
              <a href="sign.php" class="text-white">Inscription</a>
            </div>
            <div class="fs-4">
              <a href="#services" class="text-white">Services</a>
            </div>
            <div class="fs-4">
              <a href="#works" class="text-white">Works</a>
            </div>
            <div class="fs-4">
              <a href="#section-happy-clients" class="text-white">Happy Clients</a>
            </div>
            <div class="fs-4">
              <a href="#pricing-table" class="text-white">Pricing Table</a>
            </div>
            <div class="fs-4">
              <a href="#professional-team" class="text-white">Our Professional Team</a>
            </div>
            <div class="fs-4">
              <a href="contact.php" class="text-white">Contact</a>
            </div>
            <div class="fs-4">
              <a href="#services" class="text-white">Page Privée</a>
            </div>
          </div>
        </div>
      </div>
      
    </header>