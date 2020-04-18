<?php 
  session_start();
  if(!isset($_SESSION["login"])){
    header("Location:admin.php");
    exit;
  }

  require 'fungsi.php';
  $id = $_GET["id"];
  $art = query("SELECT * FROM artikel WHERE id = $id")[0];

  
  if(isset($_POST["update"])){
    if(update($_POST) > 0 ){
       ?>
        <script type="text/javascript">
          alert('Artikel anda berhasil di Sunting!');
          document.location.href = 'admin.php';
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

    <title>GarapCode</title>

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
          <a class="navbar-brand" href="#">GarapCode</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="admin.php"><i class="fa fa-home"></i> Artikel Saya</a></li>
              <li class="active"><a href="input_artikel.php"><i class="fa fa-pencil"></i> Tulis Artikel</a></li>
              <li><a href="profil.php"><i class="fa fa-user"></i> profil</a></li>
              <li><a onclick="return confirm('Yakin Ingin Keluar <?= $_SESSION["nama"]; ?>');" href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
          
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h3 class="animasi-teks">GarapCode Webs</h3>
        <p>Hai <?= $_SESSION["nama"]; ?></p>
        <p><img class="img-circle" width="150" src="foto/<?= $_SESSION["foto"]; ?>" ></p>

      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-1">
          <h3><i class="fa fa-pencil"></i> Tulis Artikel</h3>
          <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="gambarlama" value="<?= $art["gambar"]; ?>">
            <input type="hidden" name="id" value="<?= $art["id"]; ?>">
            <input type="hidden" name="id_user" value="<?= $_SESSION["id"]; ?>">
            <input type="hidden" name="pengirim" value="<?= $_SESSION["nama"]; ?>">
            <label>Sunting Judul</label>
            <input type="text" name="judul" class="form-control" autofocus value="<?= $art["judul"]; ?>"><br>
            <label>Sunting Penulis</label>
            <input type="text" name="penulis" class="form-control" value="<?= $art["penulis"]; ?>"><br>

            <label>Pilih Tag</label>
            <select name="tag" class="form-control">
              <option value="0">Pilih Tag</option>
              <option value="Agama" <?php if($art['tag'] == 'Agama'){echo 'selected';} ?>>Agama</option>
              <option value="Olahraga" <?php if($art["tag"] == 'Olahraga'){echo 'selected';} ?>>Olahraga</option>
              <option value="Pendidikan" <?php if($art["tag"] == 'Pendidikan'){echo 'selected';} ?>>Pendidikan</option>
              <option value="Motivasi" <?php if($art["tag"] == 'Motivasi'){echo 'selected';} ?>>Motivasi</option>
              <option value="Tutorial" <?php if($art["tag"] == 'Tutorial'){echo 'selected';} ?>>Tutorial</option>
              <option value="Lain-Lain" <?php if($art["tag"] == 'Lain-Lain'){echo 'selected';} ?>>Lain-Lain</option>
            </select><br><br>

            <label>Artikel</label>
            <textarea class="ckeditor" id="ckeditor" name="isi" class="form-control" rows="10"><?= $art["isi"]; ?></textarea><br>

            <label>Update Gambar</label>
            <img width="100" class="img-responsive" src="gambar/<?= $art["gambar"]; ?>" ><br>
            <input type="file" name="gambar"><br>

            <button type="submit" name="update" class="btn btn-warning"><i class="fa fa-edit"></i> Sunting Artikel</button>

          </form>
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
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
