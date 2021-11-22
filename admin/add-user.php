<?php require('../config.php'); ?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Manage users </title>
  </head>
  <body>
   <div class="container">
   <h1>Add user </h1>
    <form action="" method="post">
    <div class="mb-3">
  <label for="username" class="form-label">Nom d'utilisateur</label>
  <input type="text" class="form-control" id="username" name="username" placeholder="Nom d'utilisateur">
</div>
<div class="mb-3">
  <label for="email" class="form-label">Type</label>
  <select name="type" id="type" class="form-control">
      <option value="" disabled selected>Type</option>
      <option value="user">User</option>
      <option value="admin">Admin</option>
  </select>
  </div>
<div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input type="email" class="form-control" id="email" name="email" placeholder="Email">
</div>
<div class="mb-3">
  <label for="password" class="form-label">Password</label>
  <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
</div>
<div class="mb-3">
  <button type="submit" name="submit" class="btn btn-success">+ add user</button>
  Déjà inscrit ? connectez-vous<a href="login.php"> ici</a>
</div>
    </form>

   </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php
    if (isset($_POST['submit'])) {
        
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $type = htmlspecialchars($_POST['type']);
        $password =  htmlspecialchars($_POST['password']);
     
        // requete
         $sql =" INSERT INTO users (id, username, email, type, password) VALUES (
         NULL,
         '$username',
         '$email',
         '$type',
         '".hash('sha256',$password)."' 
         )";
       // execution de la requette
       $res = mysqli_query($cnx,$sql);
       if ($res==True) {
           # code...
           header("Location:home.php");
       }
    }
?>