<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Journal le Pays</title>
</head>

<body class="all-color">
  <?php wp_head(); ?>


  <nav class="navbar navbar-expand-lg navbar-light shadow-sm container-color">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.PNG" alt="Logo" width="100px" height="85px" />
    <div class="collapse navbar-collapse" id="navbar4">
      <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
        <li class="nav-item"> <a class="nav-link" href="#">
            <i class="fab fa-twitter"></i><span class="d-lg-none ml-3">Twitter</span>
          </a> </li>
        <li class="nav-item"> <a class="nav-link" href="#">
            <i class="fab fa-facebook"></i><span class="d-lg-none ml-3">Facebook</span>
          </a> </li>
        <li class="nav-item"> <a class="nav-link" href="#">
            <i class="fab fa-instagram"></i><span class="d-lg-none ml-3">Instagram</span>
          </a> </li>
        <li class="nav-item"> <a class="nav-link" href="#">
            <i class="fab fa-linkedin"></i><span class="d-lg-none ml-3">Linkedin</span>
          </a> </li>
        <div class="input-group rounded">
          <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
          <span class="input-group-text border-0" id="search-addon">
            <i class="fas fa-search"></i>
          </span>
        </div>
      </ul>
    </div>

  </nav>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link special" href="<?php echo get_permalink(2); ?>">Home <span class="sr-only"></span></a>
        </li>

    </ul>
    </div>
  </nav>

