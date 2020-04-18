<?php 
  session_start();
  if(!isset($_SESSION["login"])){
    header("Location:login.php");
    exit;
  }
  require 'fungsi.php';
  $id = $_GET["id"];
  $user = query("SELECT * FROM user WHERE id = $id")[0];

  if(isset($_POST["updateprofil"])){
    if(updateprof($_POST) > 0 ){
       ?>
        <script type="text/javascript">
          alert('Profil Berhasil Di Update.. Silahkan Login Kembali!');
          document.location.href = 'logout.php';
        </script>
      <?php
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

    <title>garapcode - Update Profil Saya</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
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
        <h3 class="animasi-teks">www.garapcode.ga <i class="fa fa-coffee"></i></h3>
        <div class="row">
          <div class="col-md-5">
            <div class="hr2"></div>
            <p style="font-size: 14px; color: red;">Note : harap mengingat perubahan profil anda sebelum anda mengklik tombol update profil, karena anda akan di arahkan untuk logout dan login ulang</p>
            <div class="hr2"></div><br>
            <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="fotolama" value="<?= $_SESSION["foto"]; ?>">
            <input type="hidden" name="id" value="<?= $user["id"]; ?>">
            <label>Nama Lengkap</label>
            <input class="form-control" type="text" name="nama" value="<?= $_SESSION["nama"]; ?>"><br>
            <label>email</label>
            <input class="form-control" type="email" name="email" value="<?= $_SESSION["email"]; ?>"><br>
            <label>Foto (Max 2 Mb)</label>
            <img width="90" class="img-responsive" src="foto/<?= $_SESSION["foto"]; ?>" ><br>
            <input type="file" name="foto"><br>
            <label>username</label>
            <input class="form-control" type="text" name="username" value="<?= $_SESSION["username"]; ?>"><br>
            <label>password</label>
            <input class="form-control" type="text" name="password" value="<?= $_SESSION["password"]; ?>"><br>
            <button class="btn btn-primary" name="updateprofil"><i class="fa fa-edit"></i> Update Profil</button>
          </form>
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
