<?php

 require '../lib/Connexion.php';
  require'../lib/Functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
       <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
   
</head>
<style type="text/css">
    #filtersubmit {
    position: relative;
    z-index: 1;
    left: -25px;
    top: 1px;
    color: #000;
    cursor:pointer;
    width: 0;
}
</style>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light" >
  <a class="navbar-brand" style="color: #FFF;">Inventaire</a>

</nav>
 <div class="card-body">
      <?php if(!empty($username_err)): ?>
        <div class="alert alert-danger">
          <?= $username_err; ?>
        </div>
      <?php endif; ?>
      <?php if(!empty($password_err)): ?>
        <div class="alert alert-danger">
          <?= $password_err; ?>
        </div>
      <?php endif; ?>

    </div>

<div id="welcome">
        <div type="card" class="card w-85" style="background-color:#009933;">
            <div class="card-header" style="font-size: 18px;">
    Connectez-vous !
  </div>
            
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class=" form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <input type="text" name="username"class="col-12 form-control" value="<?php echo $username; ?>" placeholder="Identifiant" style="background-color: #f9fbd0; margin-top: 25px;">
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <input type="password" name="password" class="col-12 form-control" style="background-color: #f9fbd0;" placeholder="Mot de passe">
                <i id="filtersubmit" class="fas fa-key"></i>
            </div>
            <div class="form-group">
                <input type="submit" class="btn  btn-lg btn-block" value="Connexion" style="background-color: #f9fbd0; color: #000; cursor: pointer;">
            </div>
            <p>Don't have an account? <a href="../lib/Register.php">Sign up now</a>.</p>
        </form>
            </div>
        </div>
   
</body>
</html>