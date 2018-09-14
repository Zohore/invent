<?php

session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}

  require'../lib/Functions.php';
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
    <a class="navbar-brand" style="color: #FFF;">Inventaire à faire</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"  style="background-color: #f9fbd0; cursor: pointer;">
      <span class="navbar-toggler-icon"  ></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav mr-auto" >
        <li class="nav-item active">
          <a class="btn btn" href="Logout.php" role="button" style="background-color: #fcfde9; color: black;">Inventaire en cours</a>
        </li>
        <br>
        <li class="nav-item active">
          <a class="btn btn" href="Logout.php" role="button" style="background-color: #fcfde9; color: black;">Inventaire Terminer</a>
        </li>
        <br>
        <li class="nav-item active">
          <a class="btn btn" href="Logout.php" role="button" style="background-color: #fcfde9; color: black;">Deconnexion</a>
        </li>

      </ul>
    </div>
  </nav>


  <div class="card1">
  <div class="card-header">
    Qui va fait l'inventaire* ?
  </div>
  <div class="card-body">
    <small id="emailHelp"  class="form-text"> *Attention, le directeur est tenu seul responsable de cette inventaire, peu importe qui le fera.</small>
<div class="formulairedirecteur">
    <form>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Nom">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Prenom">
    </div>

     </div>
     <br>
    <div class="row">
    <div class="col-5">
      <input type="date" class="form-control" placeholder="Date d'envoi">
    </div>
 
</form>
</div>
      </div>
    </div>


<div class="card2">
  <div class="card-header">
    Choissisez un inventaire
  </div>
  <div class="card-body">
        <table class="table table-bordered" >
          <tr>
            <th style="background-color: #f9fbd0; border-color: #000; color: #000">Categories</th>
           

          </tr>
          <?php foreach($gens as $person): ?>
            <tr>
              <td style="background-color: #f9fbd0; border-color: #000; color: #000"><?= $person->name_category; ?></td>
             

              <td  style="background-color: #f9fbd0; border-color: #000">
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal" style="width: 50px; background: #ff3333; float: left; cursor: pointer;">Effectuer</button>
                <a href="materiel.php?id=<?= $person->id ?>"><button type="button" class="btn btn-dark"  style="width: 50px; background: #ff3333; float: left; cursor: pointer;">go</button></a>
              </td >
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="card-body">
          <form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Qui va faire l'inventaire ?</label>
    <input type="text" class="form-control" name="nom" value="" placeholder="Nom">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="prenom" value="" placeholder="Prenom">
  </div>
  <select class="form-control" name="status">
  <option>Directeur</option>
  <option>Animateur</option>
</select>
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
    </div>
  </div>
</div>
 
  
</body>
</html>
