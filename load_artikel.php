<?php 
  session_start();
  if(!isset($_SESSION["login"])){
    header("Location:admin.php");
    exit;
  }

  require 'fungsi.php';
  if(isset($_POST["upload"])){
    if(input($_POST) > 0 ){
       {
          echo"<META HTTP-EQUIV=Refresh CONTENT='3; URL=admin.php'>";
          include"terimakasih-komentar.php";
        }
    }else{
      echo mysqli_error($koneksi);
    }
  }
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

    <title>garapcode - Tulis Artikel</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jumbotron.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="ckeditor/ckeditor.js"></script>
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="jquery.js"></script>
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
              <li><a href="admin.php"><i class="fa fa-home"></i> Artikel Saya</a></li>
              <li class="active"><a href="input_artikel.php"><i class="fa fa-pencil"></i> Tulis Artikel</a></li>
              <li><a href="profil.php"><i class="fa fa-user"></i> profil</a></li>
              <li><a onclick="return confirm('Yakin Ingin Keluar <?= $_SESSION["nama"]; ?>');" href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
          
        </div>
      </div>
    </nav>

   


    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
