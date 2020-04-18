<?php 
  session_start();
  if(!isset($_SESSION["loging"])){
    header("Location:index.php");
    exit;
  }
  require 'fungsi.php';
  include 'indo.php';
  $id = $_GET["id"];
  $artikel = query("SELECT * FROM artikel WHERE id = $id and flag = 0");


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

    <title>Adming Adam</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jumbotron.css" rel="stylesheet">
    
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
          <a class="navbar-brand" href="#">GarapCode<i class="fa fa-coffee"></i></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="adming.php"><i class="fa fa-book"></i> List Artikel</a></li>
              <li><a href="user.php"><i class="fa fa-pencil"></i> User</a></li>
              <li><a href="komentar.php"><i class="fa fa-comment"></i> Komentar</a></li>
              <li><a href="motivasi.php"><i class="fa fa-bolt"></i> Motivasi</a></li>
              <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
          
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h3 class="animasi-teks"> GarapCode Webs <i class="fa fa-coffee"></i></h3>
      </div>
    </div>

    <div class="container">
      <div class="row">
         <?php foreach($artikel as $art): ?>
            <div class="col-md-7 kotak">
           
            <p class="text-primary">garapcode &raquo <?= $art["tag"]; ?></p>
            <div class="hr2"></div>
            <div><h2><?= $art["judul"]; ?></h2></div>
            <div class="hr2"></div><br>
            <p class="text-muted">Di Post Oleh <?= $art["penulis"]; ?></p>
            <p class="text-muted">Pada <?= TanggalIndo($art["tgl"]); ?></p><br>
            <div><a href="gambar/<?= $art["gambar"]; ?>"><img class="img-responsive" src="gambar/<?= $art["gambar"]; ?>"></a></div><br>
            <p><?= $art["isi"]; ?></p><br> 
            <div class="text-right"><a class="btn btn-success btn-lg" href="approve.php?id=<?= $art["id"]; ?>"><i class="fa fa-check-circle"></i> Approve Artikel Ini</a></div>
            </div>
       <?php endforeach; ?>
     </div>
   </div>



    <div class="container">
      <hr>
      <footer>
        <p>&copy; Webs Creative 2018</p>
      </footer>
    </div> 
  

  </body>
</html>
