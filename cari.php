<?php 
  session_start();
  if(isset($_SESSION["login"])){
    header("Location:admin.php");
    exit;
  }
  require 'fungsi.php';

  $artikel = query("SELECT * FROM artikel WHERE flag = 1 ORDER BY id DESC");
   $artikel2 = query("SELECT * FROM artikel WHERE flag = 1 ORDER BY RAND() LIMIT 3");

  if(isset($_POST["cari"])){
    $artikel = cari($_POST["keyword"]);
  }
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

    <title>garapcode - Hasil Pencarian <?= $_SESSION["keyword"]; ?></title>

    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jumbotron.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="jquery.js"></script>
    <link rel="shortcut icon" href="bg/logomy.png" />
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
            <i title="Search Artikel" style="color:white;" class="fa fa-search"></i>
          </button>
          <a class="navbar-brand" href="#">garapcode<i class="fa fa-coffee"></i></a>
        </div>
      
        <div id="navbar" class="navbar-collapse collapse">
         <div class="hidden-xs">
          <form class="navbar-form navbar-right" method="post" action="cari.php">
              <div class="form-group">
                <input name="keyword" size="20" type="text" placeholder="Cari Artikel.." class="form-control" id="mods" autofocus autocomplete="off">
                <button type="submit" name="cari" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
              </div>         
          </form>
         </div>
         <div class="hidden-lg hidden-sm">
            <form class="navbar-form navbar-right" method="post" action="cari.php">
              <div class="input-group">
                <input name="keyword" size="20" type="text" placeholder="Cari Artikel.." class="form-control" autofocus autocomplete="off">
                <span class="input-group-btn">
                  <button class="btn btn-info" type="submit" name="cari">Go!</button>
                </span>
              </div>         
            </form>
         </div>
          <div class="navbar-collapse collapse">
               <ul class="nav navbar-nav">
                  <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                  <li><a href="about.php"><i class="fa fa-github"></i> About</a></li>
                    <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i> Akun <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="login.php">Login</a></li>
                  <li><a href="daftar.php">Daftar</a></li>
                </ul>
                    </li>
              </ul>
           </div> <!-- tutup navbar collapse lg -->
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    
    <br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hidden-lg hidden-sm">
          <form action="">
            <select style="height: 29px;" class="form-control" onchange="window.open(this.options[this.selectedIndex].value,'_top')">
              <option value="">Pilih Menu</option>
              <option value="index.php">Home</option>
              <option value="about.php">About Web</option>
              <option value="login.php">Login</option>
              <option value="daftar.php">Daftar</option>
            </select>
         </form><br><br>
        </div>
        <div class="hidden-xs hidden-sm">
          <h3><i class="fa fa-search"></i> Hasil Pencarian Keyword <a style="color: red;">'<?= $_SESSION["keyword"]; ?>'</a></h3>
        </div>
        <div class="hidden-lg">
          <h4><i class="fa fa-search"></i> Hasil Pencarian Keyword <a style="color: red;">'<?= $_SESSION["keyword"]; ?>'</a></h4>
        </div>
        <hr>
      </div>
    </div>
  </div>

    <div class="container">
      <div class="row">
       <?php foreach($artikel as $art): ?>
            <div class="col-md-4">
           
              <div class="thumbnail2">
               <p class="text-danger"><i class="fa fa-tag"></i> <?= $art["tag"]; ?></p>
               <div style="height: 65px;"><h4><?= $art["judul"]; ?></h4></div>
               <div align="center"><img style="height: 185px;" class="img-responsive" src="gambar/<?= $art["gambar"]; ?>" ></div><br>
               <p class="huruf"><?= substr(strip_tags($art["isi"]),0,230); ?>...</p>
               <h4 class="text-right baca"><a href="artikel.php?id=<?= $art["id"]; ?>">Baca Selengkapnya &raquo</a></h4>
              </div>

            </div>
       <?php endforeach; ?>
      </div>
  
        <?php if(empty($art)): ?>
          <div class="hidden-xs hidden-sm">
            <h3 class="text-primary">Upss..Tidak Ada Artikel Yang Sesuai Dengan Keyword Pencarian Anda :(</h3><br> <br><br>
            <h4 class="text-warning">Mungkin anda tertarik dengan artikel ini!</h4>
          </div>
          <div class="hidden-lg">
            <h4 class="text-primary">Upss..Tidak Ada Artikel Yang Sesuai Dengan Keyword Pencarian Anda :(</h4><br>
            <h5 class="text-warning">Mungkin anda tertarik dengan artikel ini!</h5>
          </div>
          <div class="row">
            <?php foreach($artikel2 as $art2): ?>
              <div class="col-md-4">
             
               <div class="thumbnail2">
                 <p class="text-danger"><i class="fa fa-tag"></i> <?= $art2["tag"]; ?></p>
                 <div style="height: 65px;"><h4><?= $art2["judul"]; ?></h4></div>
                 <p class="text-muted">9 jam yg lalu</p>
                 <div align="center"><img style="height: 185px;" class="img-responsive" src="gambar/<?= $art2["gambar"]; ?>" ></div><br>
                 <p class="huruf"><?= substr(strip_tags($art2["isi"]),0,230); ?>...</p>
                 <h4 class="text-right baca"><a href="artikel.php?id=<?= $art2["id"]; ?>">Baca Selengkapnya &raquo</a></h4>
              </div>

              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
        
      <hr><br>
      <div class="hidden-xs hidden-sm">
        <h3 style="padding: 10px;" class="bg-default">AYO NULIS DI GARAPCODE !</h3>
      </div>
       <div class="hidden-lg">
        <h4 style="padding: 5px;" class="bg-info">AYO NULIS DI GARAPCODE !</h4>
      </div>
      
      <div class="jumbotron">
      <div class="container">
        <h2 class="animasi-teks">www.garapcode.ga</h2>
        <div class="hidden-xs hidden-sm">
          <p>Kami ingin senantiasa memanjakan pengunjung dengan artikel berkualitas dan bermanfaat setiap waktu, kamu juga bisa menuliskan artikel mu di sini agar bisa di akses banyak orang</p>
          <p>
        </div>
        <div class="hidden-lg">
          <p style="font-size: 14px;">Kami ingin senantiasa memanjakan pengunjung dengan artikel berkualitas dan bermanfaat setiap waktu, kamu juga bisa menuliskan artikel mu di sini agar bisa di akses banyak orang</p>
          <p>
        </div>
          <div class="hidden-xs">
            <a class="btn btn-primary btn-lg" href="login.php" role="button">Login <i class="fa fa-sign-in"></i></a>
            <a class="btn btn-success btn-lg" href="daftar.php" role="button">Daftar <i class="fa fa-pencil"></i></a>
          </div>
          <div class="hidden-lg hidden-sm">
            <a class="btn btn-primary btn-sm" href="login.php" role="button">Login <i class="fa fa-sign-in"></i></a>
            <a class="btn btn-success btn-sm" href="daftar.php" role="button">Daftar <i class="fa fa-pencil"></i></a>
          </div>
        </p>
      </div>
    </div><br><br>

      <div class="text-right">
        <div class="hidden-xs hidden-sm">
          <h3>Kunjungi Media Sosial Kami Juga !</h3>
            <a title="Youtube - Calon Programmer" class="btn btn-danger btn-lg" href="https://www.youtube.com/channel/UC7ZghQXHmQOYiFjuRsQwlPg"><i class="fa fa-youtube fa-2x"></i></a>&nbsp
            <a title="Facebook - Adam Julianto" class="btn btn-primary btn-lg" href="https://mobile.facebook.com/adam.zulianto"><i class="fa fa-facebook fa-2x"></i></a>&nbsp
            <a title="Whatsapp Saya - 083806684355" class="btn btn-success btn-lg" href="https://api.whatsapp.com/send?phone=6283806684355&text=Chat%20Dengan%20Adam%20Zulianto"><i class="fa fa-phone-square fa-2x"></i></a>&nbsp
            <a title="Instagram - Adam28.Zulianto" class="btn btn-danger btn-lg" href="https://www.instagram.com/adam28.zulianto/"><i class="fa fa-instagram fa-2x"></i></a>&nbsp
            <a title="Jarang Aktif Di Twitter :)" class="btn btn-info btn-lg"><i class="fa fa-twitter fa-2x"></i></a>
        </div>
        <div class="hidden-lg">
          <h4>Kunjungi Media Sosial Kami Juga !</h4>
            <a title="Youtube - Calon Programmer" class="btn btn-danger btn-sm" href="https://www.youtube.com/channel/UC7ZghQXHmQOYiFjuRsQwlPg"><i class="fa fa-youtube fa-2x"></i></a>&nbsp
            <a title="Facebook - Adam Julianto" class="btn btn-primary btn-sm" href="https://mobile.facebook.com/adam.zulianto"><i class="fa fa-facebook fa-2x"></i></a>&nbsp
            <a title="Whatsapp Saya - 083806684355" class="btn btn-success btn-sm" href="https://api.whatsapp.com/send?phone=6283806684355&text=Chat%20Dengan%20Adam%20Zulianto"><i class="fa fa-phone-square fa-2x"></i></a>&nbsp
            <a title="Instagram - Adam28.Zulianto" class="btn btn-danger btn-sm" href="https://www.instagram.com/adam28.zulianto/"><i class="fa fa-instagram fa-2x"></i></a>&nbsp
            <a title="Jarang Aktif Di Twitter :)" class="btn btn-info btn-sm"><i class="fa fa-twitter fa-2x"></i></a>
        </div>
      </div>

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
