<?php

session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}


?>

<!doctype html>
<html lang="en">
<head>
  <title>Hello, world!</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light" >
    <a class="navbar-brand" style="color: #FFF;">Inventaire</a>
    <a class="navbar-brand" style="color: #FFF; float: right;"><?php echo htmlspecialchars($_SESSION['username']); ?></b></a>

  </nav>
  <body>


    <div class="card text-center">
      <div class="card-body">
        <h3 class="card-title">Bien utiliser l'inventaire</h3>
        <p class="card-text">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione ?"</p>
      </div>
      <div class="card-footer text-muted">
       <div>
        <label for="option-1" style="color: #fff">J'assure avoir prit connaissance de toutes les informations.</label>
      </div>
      <div>
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal" style="width: 50px; background: #ff3333; float: left; cursor: pointer;"><i class="fas fa-times"></i></button>
        <button type="button" class="btn btn-dark" style="width: 50px; background: #4dd2ff; float: right; cursor: pointer;" data-toggle="modal" data-target="#exampleModal1"><i class="fas fa-check"></i></button>
      </div>
    </div>
  </div>



  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h6><b>Cette action va vous déconnecter. Êtes-vous sur ?</b></h6>
        </div>

        <div class="card-footer text-muted" style="background-color: #fcfde9;">
          <div>
            <a href="Logout.php"><button type="button" class="btn btn-dark" style="width: 120px; background: #ff3333; float: left; cursor: pointer;">Deconnexion</button></a>
            <button type="button" class="btn btn-dark" style="width: 120px; background: #4dd2ff; float: right; cursor: pointer;" data-toggle="modal" data-target="#exampleModal1">Continuer</i></button>

          </div>  
        </div>
      </div>
    </div>
  </div>



  <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Que voulez vous faire ?</h5>
        </div>
        <div class="modal-body">
         <div class="list-group">
          <a href="InventAFaire.php"><button type="button" class="list-group-item list-group-item-action" style="cursor: pointer; background-color: #3399ff;">
            Inventaire à faire 
          </button></a>
          <a href="InventEnCours.php"><button type="button" class="list-group-item list-group-item-action" style="cursor: pointer; background-color: #ff9933;">Inventaire en cours </button></a>
          <a href="InventTermine.php"><button type="button" class="list-group-item list-group-item-action" style="cursor: pointer; background-color: #00b300;">Inventaire terminée</button></a>
        </div>

      </div>
      <div class="modal-footer" style="background-color: #fcfde9;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background: #ff3333;"><i class="fas fa-times" style="width: 50px;"></i></button>
        
      </div>
    </div>
  </div>
</div>


<script src="../js/index.js"></script>
