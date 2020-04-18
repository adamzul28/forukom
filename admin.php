<?php 
  session_start();
  if(!isset($_SESSION["login"])){
    header("Location:login.php");
    exit;
  }
  require 'fungsi.php';
  include 'indos.php';
  $id_user = $_SESSION["id"];
  $artikel = query("SELECT * FROM artikel  WHERE id_user = $id_user and flag = 1 ORDER BY id DESC");

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>garapcode - Artikel Saya</title>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="DataTables/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="DataTables/css/dataTables.bootstrap.css">
    <link href="css/jumbotron.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="DataTables/js/jquery.dataTables.js"></script>
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
              <li class="active"><a href="admin.php"><i class="fa fa-book"></i> Artikel Saya</a></li>
              <li><a href="input_artikel.php"><i class="fa fa-pencil"></i> Tulis Artikel</a></li>
              <li><a href="profil.php"><i class="fa fa-user"></i> profil</a></li>
              <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
          
        </div>
      </div>
    </nav>

    <div class="jumbotron">
      <div class="container">
        <h3 class="animasi-teks">www.garapcode.ga <i class="fa fa-coffee"></i></h3>
        <p>Hai <?= $_SESSION["nama"]; ?></p>
        <p><img class="img-circle" width="150" src="foto/<?= $_SESSION["foto"]; ?>" ></p>

      </div>
    </div>

    <div class="container">
      <div class="col-md-6">
        <h2><i class="fa fa-book"></i> Artikel Saya</h2>
        <h5 style="padding: 5px;" class="bg-danger hidden-lg hidden-sm">Untuk mendapatkan tampilan lebih baik sebaiknya anda akses halaman ini lewat pc/tablet</h5>
        <br>
        <table class="table table-bordered table-hover data">
        <thead>
          <tr class="bg-info">
            <th>Artikel Di Setujui</th>
          </tr>
        </thead>

      <p class="text-muted text-right">
          Anda Mempunyai
          <?php 
          $jumlah = count(query("SELECT * FROM artikel WHERE id_user = $id_user and flag = 1"));
          echo $jumlah;
         ?>
         Artikel
        </p>

     <tbody>
      <?php foreach($artikel as $art): ?>
        <tr>
            <td>
               <div> <?= $art["judul"]; ?></div>
               <div class="text-right text-muted"><?= waktu_lalu($art["tgl"]); ?></div>
               <div><a class="btn btn-info btn-xs"><?= $art["tag"]; ?></a></div><br>
               <div class="text-right">
                 <a class="btn btn-primary btn-xs" href="view.php?id=<?= $art["id"]; ?>"><i class="fa fa-eye"></i> LIHAT</a> |
                 <a class="btn btn-warning btn-xs" href="update.php?id=<?= $art["id"]; ?>"><i class="fa fa-edit"></i> SUNTING</a> |
                 <a onclick="return confirm('Yakin Ingin menghapus artikel <?= $_SESSION["judul"]; ?>');" class="btn btn-danger btn-xs" href="hapus.php?id=<?= $art["id"]; ?>"><i class="fa fa-eraser"></i> HAPUS</a>
               </div>
               <div style="padding-bottom: 30px;"></div>
            </td>
        </tr> 
      <?php endforeach; ?>
     </tbody>

      </table>
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
  <script type="text/javascript">
  $(document).ready(function(){
    $('.data').DataTable();
  });
</script>
</html>
