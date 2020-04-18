<?php 
  session_start();
  if(isset($_SESSION["login"])){
    header("Location:admin.php");
    exit;
  }
  require 'fungsi.php';
  include 'indos.php';
  include 'indo.php';

  $id = $_GET["id"];
  $artikel = query("SELECT * FROM artikel WHERE id = $id and flag = 1");
  $artikel2 = query("SELECT * FROM artikel WHERE flag = 1 ORDER BY RAND() LIMIT 5");
  $artikel3 = query("SELECT * FROM artikel WHERE flag = 1 ORDER BY RAND() LIMIT 3");
  // $motivasi = query("SELECT * FROM motivasi ORDER BY RAND() LIMIT 1");
  $motivasi = query("SELECT * FROM motivasi ORDER BY RAND() LIMIT 1");
  if(isset($_POST["cari"])){
    $artikel = cari($_POST["keyword"]);
  }

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>
       <?php foreach($artikel as $art): ?>
        garapcode - <?= $art["judul"]; ?>
      <?php endforeach; ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jumbotron.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
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
          <div class="hidden-xs hidden-sm">
            <form class="navbar-form navbar-right" action="cari.php" method="post">
              <div class="form-group">
                <input name="keyword" size="20" type="text" placeholder="Cari Keyword.." class="form-control" id="mods" autofocus autocomplete="off">
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
        </div><!--/.navbar-collapse -->
      </div>
    </nav><br><br>


    <div class="container">
      <div class="row">
         <?php foreach($artikel as $art): ?>
            <div class="col-md-7 kotak">
           
            <p class="text-primary">garapcode &raquo <?= $art["tag"]; ?></p>
            <div class="hr2"></div>
            <div><h2><?= $art["judul"]; ?></h2></div>
            <div class="hr2"></div><br>
            <p class="text-muted">Di Post Oleh <?= $art["pengirim"]; ?></p>
            <p class="text-muted">Pada <?= TanggalIndo($art["tgl"]); ?></p><br>
            <div><a title="Gambar <?= $art["judul"]; ?>" href="gambar/<?= $art["gambar"]; ?>"><img class="img-responsive" src="gambar/<?= $art["gambar"]; ?>"></a></div>
            <h5 class="text-muted text-right"><?= $art["sumber"]; ?></h5>
            <div class="hr2"></div>
              <h4>Penulis <a class="text-primary"><?= $art["penulis"]; ?></a></h4>
            <div class="hr2"></div>
            <p><?= substr($art["isi"],0,1500); ?></p><br>
            
              <div class="row">
                <div class="col-md-10">
                  <div class="panel panel-info">
                    <div class="kolom" id="coba"><p>Baca Juga</p></div>
                      <div class="panel-body">
                        <?php foreach($artikel3 as $art3): ?>
                          <ul><li style="margin-left: -25px;"><a class="relay" href=""><?= $art3["judul"]; ?></a></li></ul> 
                        <?php endforeach; ?>
                     </div>
                    </div>
                </div>
              </div>

            <p><?= substr($art["isi"],1000,10000); ?></p>
           

            </div>
       <?php endforeach; ?>

        <div class="div hidden-xs hidden-sm">
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-md-offset-1">
                <div class="panel panel-primary">
                <div style="padding: 10px;" class="panel-heading">
                  <h4> Artikel Lainya</h4>
                  </div>
                  <?php foreach($artikel2 as $art2): ?>
                    <div class="panel-body">
                      <div class="col-md-7">
                        <p class="text-danger"><a><i class="fa fa-tag"></i></a> <?= $art2["tag"]; ?></p>
                        <h5><a class="relay" title="<?= $art2["judul"]; ?>" href="artikel.php?id=<?= $art2["id"]; ?>"><?= $art2["judul"]; ?></a></h5>
                        <p class="text-muted"><a></a><i class="fa fa-clock-o"></i> <?= waktu_lalu($art2["tgl"]); ?></p>
                      </div>
                      <div class="col-md-5">
                      <div><a title="<?= $art2["judul"]; ?>" href="artikel.php?id=<?= $art2["id"]; ?>"><img class="img-responsive" src="gambar/<?= $art2["gambar"]; ?>"></a></div>
                      </div>
                    </div>
                   <div class="hr"></div>
                 <?php endforeach; ?>
                </div><br><br>

                <?php foreach($motivasi as $motiv): ?>
                <div class="panel panel-info">
                  <div class="panel-heading">
                    <h4>Mutiara Kata! <i class="fa fa-bolt"></i></h4>
                  </div>
                  <div class="panel-body">
                    <p style="color: red;"><?= $motiv["nama"]; ?></p>
                    <h5><?= $motiv["isi"]; ?></h5>
                  </div>
                </div>
                </h4>
                <?php endforeach; ?>

              </div>
            </div><br>
          </div>
        </div>

        <?php 
          if(isset($_POST["komen"])){
            if(komen($_POST) > 0 ){
               ?>
                  <script type="text/javascript">
                    alert('Komentar Anda Terkirim!');
                  </script>
                <?php
                }else{
                  echo mysqli_error($koneksi);
                }
              }

              $id_artikel = $_GET["id"];
              $komentar = query("SELECT * FROM komentar WHERE id_artikel = $id_artikel ORDER BY id DESC");

             ?>

      <form action="" method="post">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <h3>Komentari Artikel Ini</h3><br>
              <input type="hidden" name="id">
                <input type="hidden" name="id_artikel" value="<?= $_GET["id"]; ?>">
                <label>Komentar</label>
                <textarea minlength="2" maxlength="500" name="isi" class="form-control" placeholder="Isikan Komentar"></textarea>
                <br>
                <label>Nama</label>
                <input type="text" minlength="2" name="nama" placeholder="Ex: Adam Zulianto" class="form-control">
                  
                <br>
                <label>Alamat Email</label>
                <input type="text" name="email" placeholder="ex@yahoo.com" class="form-control"><br>
                <button class="btn btn-info" name="komen"><i class="fa fa-location-arrow"></i> Post Komentar</button>

                
            </div>
        </div>
        </div>
      </form><br>

      <div class="col-md-5">
        <div class="hidden-xs hidden-sm"><h3 class="text-danger">Komentar Artikel Ini</h3></div>
        <div class="hidden-lg"><h4 class="text-danger">Komentar Artikel Ini</h4></div>
        <p class="text-right text-muted">
                <?php 
                  $jumlahkomen = count(query("SELECT * FROM komentar WHERE id_artikel = $id_artikel"));
                  echo $jumlahkomen;
                 ?>
                 Orang Mengomentari Artikel Ini
              </p><br>

        <?php foreach($komentar as $komen): ?>
            <div class="row">
              <div class="col-xs-3">
                <img title="Avatar User" src="bg/avatar-5.jpg">
              </div>
              <div class="col-xs-9">
                <div class="hidden-xs hidden-sm"><h3 class="text-primary"><?= $komen["nama"]; ?></h3></div>
                  <div class="hidden-lg"><h4 class="text-primary"><?= $komen["nama"]; ?></h4></div>
                  <p class="text-muted  belas"><i class="fa fa-clock-o"></i> <?= waktu_lalu($komen["tgl"]); ?></p>
                  <p><?= $komen["isi"]; ?></p>
              </div>
            </div>
          <hr class="hr1">
        <?php endforeach; ?>
      </div>

      </div>

      <hr><br><br><br>

      <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h3><i class="fa fa-location-arrow"></i>Article Submitter</h3>
        <hr>
        <a><a href="foto/<?= $art["foto"]; ?>"><img class="zoom" title="<?= $art["pengirim"]; ?>" class="img-responsive img-thumbnail" src="foto/<?= $art["foto"]; ?>"></a></a>
          <h3 class="text-primary"><?= $art["pengirim"]; ?></h3>
          <p class="text-muted">Dari pada bikin status galau dan lebay terus.. Yu mending nulis di garapcode!</p>
      </div><br><br><br>

      <div class="hidden-lg hidden-sm">
        <div class="container">
            <div class="row">
              <div class="col-md-4" id="col">
                <div style="height: 20px;" class="panel panel-primary">
                  <div class="panel-heading">ARTIKEL Lainya</div>

                 <?php foreach($artikel2 as $art2): ?>
                  <div class="panel-body">
                    <div class="col-xs-7">
                      <p class="text-danger belas"><a><i class="fa fa-tag"></i></a> <?= $art2["tag"]; ?></p>
                      <h4><a href="artikel.php?id=<?= $art2["id"]; ?>"><?= $art2["judul"]; ?></a></h4>
                      <p class="text-muted belas"><a></a><i class="fa fa-clock-o"></i> <?= waktu_lalu($art2["tgl"]); ?></p>
                    </div>
                    <div class="col-xs-5">
                      <div><a href="artikel.php?id=<?= $art2["id"]; ?>"><img height="400px;" class="img-responsive" src="gambar/<?= $art2["gambar"]; ?>"></a></div>
                    </div>
                  </div>
                  <div class="hr"></div>
               <?php endforeach; ?>
              </div>
              </div>
            </div><br>
          </div>
      </div>

      <div class="col-md-4 col-md-offset-2">
       <div class="hidden-xs">
          <h3>Kunjungi Media Sosial Kami Juga !</h3>
            <a title="Youtube - Calon Programmer" class="btn btn-danger btn-lg" href="https://www.youtube.com/channel/UC7ZghQXHmQOYiFjuRsQwlPg"><i class="fa fa-youtube fa-2x"></i></a>&nbsp
            <a title="Facebook - Adam Julianto" class="btn btn-primary btn-lg" href="https://mobile.facebook.com/adam.zulianto"><i class="fa fa-facebook fa-2x"></i></a>&nbsp
            <a title="Whatsapp Saya - 083806684355" class="btn btn-success btn-lg" href="https://api.whatsapp.com/send?phone=6283806684355&text=Chat%20Dengan%20Adam%20Zulianto"><i class="fa fa-phone-square fa-2x"></i></a>&nbsp
            <a title="Instagram - Adam28.Zulianto" class="btn btn-danger btn-lg" href="https://www.instagram.com/adam28.zulianto/"><i class="fa fa-instagram fa-2x"></i></a>&nbsp
            <a title="Jarang Aktif Di Twitter :)" class="btn btn-info btn-lg"><i class="fa fa-twitter fa-2x"></i></a>
        </div>
        <hr>
        <div class="hidden-lg hidden-sm">
          <h4>Kunjungi Media Sosial Kami Juga !</h4>
            <a title="Youtube - Calon Programmer" class="btn btn-danger btn-sm" href="https://www.youtube.com/channel/UC7ZghQXHmQOYiFjuRsQwlPg"><i class="fa fa-youtube fa-2x"></i></a>&nbsp
            <a title="Facebook - Adam Julianto" class="btn btn-primary btn-sm" href="https://mobile.facebook.com/adam.zulianto"><i class="fa fa-facebook fa-2x"></i></a>&nbsp
            <a title="Whatsapp Saya - 083806684355" class="btn btn-success btn-sm" href="https://api.whatsapp.com/send?phone=6283806684355&text=Chat%20Dengan%20Adam%20Zulianto"><i class="fa fa-phone-square fa-2x"></i></a>&nbsp
            <a title="Instagram - Adam28.Zulianto" class="btn btn-danger btn-sm" href="https://www.instagram.com/adam28.zulianto/"><i class="fa fa-instagram fa-2x"></i></a>&nbsp
            <a title="Jarang Aktif Di Twitter :)" class="btn btn-info btn-sm"><i class="fa fa-twitter fa-2x"></i></a>
        </div>
      </div>
    </div>
  </div><br>

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
