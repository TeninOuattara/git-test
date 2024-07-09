<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="canonical" href="css/sign-in.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
        .half-width {
            width: 50%;
        }
        .form-container {
            display: flex;
            height: 80vh;
        }
        .image-container {
            background: url('img/connexion.jpg') no-repeat center center;
            background-size: cover;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#email').blur(function() {
                var email = $(this).val();
                $.ajax({
                    url: 'verifier_email.php',
                    type: 'post',
                    data: {email: email},
                    success: function(response) {
                        $('#email_error').html(response);
                    }
                });
            });
        });
    </script>
    
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
          <button type="button" class="btn btn-outline-light me-2"  onclick="window.location.href='index.php'">Login</button>
          <button type="button" class="btn btn-warning"  onclick="window.location.href='inscription.php'">Sign-up</button>
        </div>
      </div>
    </div>
  </header>

    <div class=" container-fluid min-vh-100 d-flex flex-column flex-sm-row p-5"> 
    <div class="col-12 col-sm-6 d-flex justify-content-center align-items-center order-2 order-sm-1">

            <form action="traitement-inscription.php" method="post" class="w-100 mx-auto bg-body-secondary rounded-3">
                <h2 class="mb-4 text-center text-primary">Inscription</h2>
                <div class="form-group row">
                    <div class="col-6">
                    <label for="pays">Civilité</label>
                    <select class="form-control" name="civilite">
                        <option value="" disabled selected>Civilité</option>
                        <option value="monsieur">Monsieur</option>
                        <option value="madame">Madame</option>
                        <option value="mademoiselle">Mademoiselle</option>
                        
                    </select>
                    </div>
                    <div class="col-6">
                        <label>Genre</label><br>
                        <div class="form-control">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genre" id="genre_male" value="homme">
                            <label class="form-check-label" for="genre_male">Masculin</label>
                        </div>
                        <div class=" form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genre" id="genre_female" value="femme">
                            <label class="form-check-label" for="genre_female">Féminin</label>
                        </div>
                        </div>
                       
                       
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="nom">Nom Complet</label>
                    <input type="text" class="form-control" name="nom" placeholder="Entrez votre nom">
                </div>
                <div class="form-group">
                    <label for="nom">Nom Utilisateur</label>
                    <input type="text" class="form-control" name="nom-complet" placeholder="Entrez votre nom utilisateur">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Entrez votre email">
                </div>
                <div class="form-group">
                    <label for="motdepasse">Mot de passe</label>
                    <input type="password" class="form-control" name="motdepasse" placeholder="Choissisez un mot de passe">
                </div> <br>
                 <div class="form-group d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary me-5 ">Envoyer</button>
                    <button type="reset" class="btn btn-warning ">Annuler</button>
                </div>
               
            </form>
        </div>
        <div class="col-12 col-sm-6 image-container d-none d-sm-block">

            <!-- Cette div affichera l'image -->
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
