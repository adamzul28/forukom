<?php 
  session_start();
  if(!isset($_SESSION["login"])){
    header("Location:login.php");
    exit;
  }
  require 'fungsi.php';
  $id_user = $_SESSION["id"];
  $artikel = query("SELECT * FROM artikel WHERE id_user = $id_user");

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>garapcode - Profil Saya</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="DataTables/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="DataTables/css/dataTables.bootstrap.css">
    <link href="css/jumbotron.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="jquery.js"></script>
    <script src="js/ie-emulation-modes-warning.js"></script>
    <link rel="shortcut icon" href="bg/logomy.png" />
    
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">garapcode<i class="fa fa-coffee"></i></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="admin.php"><i class="fa fa-book"></i> Artikel Saya</a></li>
              <li><a href="input_artikel.php"><i class="fa fa-pencil"></i> Tulis Artikel</a></li>
              <li class="active"><a href="profil.php"><i class="fa fa-user"></i> profil</a></li>
              <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
          
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h3 class="animasi-teks">www.garapcode.ga <i class="fa fa-coffee"></i></h3><br><br>
        <h3 class="text-danger">Profil Saya</h3>
        <div class="row">
          <div class="col-md-3">
            <div><a href="foto/<?= $_SESSION["foto"]; ?>"><img class="img-responsive img-thumbnail" src="foto/<?= $_SESSION['foto']; ?>"></a></div>
          </div>
          
          <div class="col-md-7">
            <p class="hidden"><?= $_SESSION["id"]; ?></p>
            <p><a class="text-primary">Nama</a> : <?= $_SESSION["nama"]; ?></p>
            <p><a class="text-primary">Username</a> :<?= $_SESSION["username"]; ?></p>
            <p><a class="text-primary">Email</a> : <?= $_SESSION["email"]; ?></p>
            <p><a class="text-primary">Password</a> : <?= $_SESSION["password"]; ?></p>

            <a class="btn btn-primary" href="update_profil.php?id=<?= $_SESSION["id"]; ?>"><i class="fa fa-edit"></i> Update Profil</a>
          </div>

        </div>

      </div>
    </div>

    
  </div>

    <div class="container">
      <hr>
      <footer>
        <p>&copy; Webs Creative 2018</p>
      </footer>
    </div> 
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
