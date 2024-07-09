<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="canonical" href="css/sign-in.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
   body {
            background: url('img/acceuil.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        .bg-gold {
            background-color: #C2B280 !important;
        }
</style>
    
</head>

<body>
<header class="p-3 text-bg-primary">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
         <img src="img/logo3-removebg-preview.png"  width="50" height="50" alt="">
        </a>
            
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
         
          <li><a href="#" class="nav-link px-2 text-warning">Acceuil</a></li>
          
          <li><a href="#" class="nav-link px-2 text-white">Reglage</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-light" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2" onclick="window.location.href='index.php'">Login</button>
          <button type="button" class="btn btn-warning" onclick="window.location.href='inscription.php'">Sign-up</button>
        </div>
      </div>
    </div>
  </header>

  

  <div class="container  mt-5">
  <main class="form-signin w-50 m-auto rounded-3 bg-body-secondary">
  <form action="traitement-login.php" method="post"  class="">
    <img class="mb-4" src="img/logo3-removebg-preview.png" alt="" width="100" height="80">
    <h1 class="h3 mb-3 fw-normal">Connectez-vous!</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
      <label for="floatingInput">addresse mail</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="motdepasse" placeholder="Password">
      <label for="floatingPassword">Mot de passe</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Se souvenir de moi
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Connexion</button>
    <p class="text-center">si vous n'avez pas de compte <a href="inscription.php">Inscrivez vous</a>    </p>
    
  </form>
</main>
  </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
