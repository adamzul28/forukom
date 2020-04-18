<?php 
  session_start();
  if(!isset($_SESSION["loging"])){
    header("Location:index.php");
    exit;
  }
  require 'fungsi.php';
  $user = query("SELECT * FROM user ORDER BY id DESC");

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
              <li><a href="adming.php"><i class="fa fa-book"></i> List Artikel</a></li>
              <li class="active"><a href="user.php"><i class="fa fa-user"></i> User</a></li>
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
        <h2><i class="fa fa-book"></i> List User Admin</h2><br>
        <table class="table table-bordered table-hover data">
        <thead>
          <tr class="bg-primary">
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Email</th>
            <th>Foto</th>
            <th>Aksi</th>
          </tr>
        </thead>

      <p class="text-muted text-right">
          Terdapat
          <?php 
          $jumlah = count(query("SELECT * FROM user"));
          echo $jumlah;
         ?>
         User Terdaftar Di Website Ini
        </p>

     <tbody>
      <?php $i =1; ?>
      <?php foreach($user as $usr): ?>
        
        <tr>
            <td><?= $i; ?></td>
            <td><?= $usr["nama"]; ?></td>
            <td><?= $usr["username"]; ?></td>
            <td><?= $usr["email"]; ?></td>
            <td><img width="60" src="foto/<?= $usr["foto"]; ?>" ></td>
            <td>
              <a onclick="return confirm('Yakin Ingin menghapus useradmin ini?');" class="btn btn-danger btn-xs" href="hapus3.php?id=<?= $usr["id"]; ?>"><i class="fa fa-eraser"></i> Delete</a>
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
