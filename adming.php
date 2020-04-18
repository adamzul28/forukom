<?php 
  session_start();
  if(!isset($_SESSION["loging"])){
    header("Location:index.php");
    exit;
  }
  require 'fungsi.php';
  $artikel = query("SELECT * FROM artikel WHERE flag = 0 ORDER BY id DESC");


 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Adming Adam</title>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="DataTables/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="DataTables/css/dataTables.bootstrap.css">
    <link href="css/jumbotron.css" rel="stylesheet">
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
      <div class="col-md-12">
        <h2><i class="fa fa-book"></i> List Artikel</h2><br>
        <h3 class="text-danger">Artikel Belum Di Approve</h3>
        <table class="table table-bordered table-hover data">
        <thead>
          <tr style="background-color: #f2f2f2; ">
            <th>No</th>
            <th>Judul</th>
            <th>Tag</th>
            <th>Penulis</th>
            <th>Aksi</th>
          </tr>
        </thead>

      <p class="text-muted text-right">
          Terdapat
          <?php 
          $jumlah = count(query("SELECT * FROM artikel WHERE flag = 0"));
          echo $jumlah;
         ?>
         Artikel Belum Di approve
        </p>

     <tbody>
      <?php $i =1; ?>
      <?php foreach($artikel as $art): ?>
        
        <tr>
            <td><?= $i; ?></td>
            <td><?= $art["judul"]; ?></td>
            <td><?= $art["tag"]; ?></td>
            <td><?= $art["penulis"]; ?></td>
            <td>
              <a class="btn btn-warning btn-xs" href="lihat.php?id=<?= $art["id"]; ?>"><i class="fa fa-eye"></i> Lihat Artikel</a>
              <a class="btn btn-success btn-xs" href="approve.php?id=<?= $art["id"]; ?>"><i class="fa fa-check"></i> Langsung Approve</a>
              <a onclick="return confirm('Yakin Ingin menghapus artikel <?= $_SESSION["judul"]; ?>');" class="btn btn-danger btn-xs" href="hapus2.php?id=<?= $art["id"]; ?>"><i class="fa fa-eraser"></i> Delete</a>
            </td>
        </tr>
       
      <?php $i++; ?>
      <?php endforeach; ?>
     </tbody>

      </table>
    </div>
  </div><br><br><br>

  <?php 
    $artikel2 = query("SELECT * FROM artikel WHERE flag = 1 ORDER BY id DESC");
   ?>

  <div class="container">
      <div class="col-md-12">
        <h3 class="text-danger">Artikel Sudah Di Approve  <i class="fa fa-check-circle"></i></h3>
        <table class="table table-bordered table-hover data">
        <thead>
          <tr class="bg-primary">
            <th>No</th>
            <th>Judul</th>
            <th>Tag</th>
            <th>Gambar</th>
            <th>Aksi</th>
          </tr>
        </thead>

      <p class="text-muted text-right">
          Terdapat
          <?php 
          $jumlah = count(query("SELECT * FROM artikel WHERE flag = 1"));
          echo $jumlah;
         ?>
         Artikel Sudah Di Approved  <i class="fa fa-check-circle"></i>
        </p>

     <tbody>
      <?php $i =1; ?>
      <?php foreach($artikel2 as $art2): ?>
        
        <tr>
            <td><?= $i; ?></td>
            <td><?= $art2["judul"]; ?></td>
            <td><?= $art2["tag"]; ?></td>
            <td><img width="60" src="gambar/<?= $art2["gambar"]; ?>" ></td>
            <td>
             <a class="btn btn-warning btn-xs" href="lihat.php?id=<?= $art["id"]; ?>"><i class="fa fa-eye"></i> Lihat Artikel</a>
              <a onclick="return confirm('Yakin Ingin menghapus artikel <?= $_SESSION["judul"]; ?>');" class="btn btn-danger btn-xs" href="hapus2.php?id=<?= $art2["id"]; ?>"><i class="fa fa-eraser"></i> Delete</a>
            </td>
        </tr>
       
      <?php $i++; ?>
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
  

  </body>
  <script type="text/javascript">
  $(document).ready(function(){
    $('.data').DataTable();
  });
</script>
</html>
