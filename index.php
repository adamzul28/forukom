<?php 
 
  require 'fungsi.php';
  require 'indos.php';

  $jumlahdataperpage = 6;
  $jumlahdata = count(query("SELECT * FROM artikel WHERE flag = 1"));
  $jumlahpage = ceil($jumlahdata / $jumlahdataperpage);
  $pageaktif = (isset($_GET["page"])) ? $_GET["page"] : 1;
  $awaldata = ($jumlahdataperpage * $pageaktif) - $jumlahdataperpage;

  $artikel = query("SELECT * FROM artikel WHERE flag = 1 ORDER BY id DESC LIMIT $awaldata, $jumlahdataperpage");

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

    <title>Situs Berbagi Artikel Karya Anak SMK - garapcode</title>

    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jumbotron.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/modif.css">
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

    <div class="jumbotron">
      <div class="container">
        <div class="hidden-lg hidden-sm">
          <form action="">
           <select style="height: 29px;" class="form-control" onchange="window.open(this.options[this.selectedIndex].value,'_top')">
             <option value="">-- Pilih Menu --</option>
             <option value="index.php">Home</option>
             <option value="about.php">About Web</option>
             <option value="login.php">Login</option>
             <option value="daftar.php">Daftar</option>
           </select>
          </form>
        </div>
        <h1 class="animasi-teks">www.garapcode.ga</h1>
        <div class="hidden-xs hidden-sm">
          <p>Kami ingin senantiasa memanjakan pengunjung dengan artikel berkualitas dan bermanfaat setiap waktu, kamu juga bisa menuliskan artikel mu di sini agar bisa di akses banyak orang</p>
          <p>
        </div>
        <div class="hidden-lg">
          <p style="font-size: 16px;">Kami ingin senantiasa memanjakan pengunjung dengan artikel berkualitas dan bermanfaat setiap waktu, kamu juga bisa menuliskan artikel mu di sini agar bisa di akses banyak orang</p>
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
    </div>
    
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="hidden-xs"><h3 class="text-danger">Artikel Terbaru</h3></div>
        <div class="hidden-lg hidden-sm"><h4 class="text-danger">Artikel Terbaru</h4></div>
      </div>
    </div>
  </div><br>

    <div class="container">
      <div class="row">
       <?php foreach($artikel as $art): ?>
            <div class="col-md-4">
           
              <div class="thumbnail2">
               <p class="text-danger"><i class="fa fa-tag"></i> <?= $art["tag"]; ?></p>
               <div style="height: 65px;"><h4><?= $art["judul"]; ?></h4></div>
               <p class="text-muted"><?= waktu_lalu($art["tgl"]); ?></p>
               <div align="center"><img title="<?= $art["judul"]; ?>" style="height: 185px;" class="img-responsive" src="gambar/<?= $art["gambar"]; ?>" ></div><br>
               <p class="huruf"><?= substr(strip_tags($art["isi"]),0,230); ?>...</p>
               <h4 class="text-right baca"><a href="artikel.php?id=<?= $art["id"]; ?>">Baca Selengkapnya &raquo</a></h4>
              </div>

            </div>
       <?php endforeach; ?>
      </div>

        <div class="hidden-xs">
          <div class="pagination">
          <?php if($pageaktif > 1): ?>
            <a href="?page=<?= $pageaktif - 1 ?>">&laquo Previous</a>
          <?php else: ?>
            <a title="Ini Page Awal" class="active">&laquo Previous</a>
          <?php endif; ?>
            

         <?php for($i = 1; $i <=$jumlahpage; $i++): ?>
            <?php if($i == $pageaktif): ?>
              <a class="active" href="?page=<?= $i; ?>"><?= $i; ?></a>
            <?php else: ?>
              <a href="?page=<?= $i; ?>"><?= $i; ?></a>
            <?php endif; ?>
         <?php endfor; ?>

         <?php if($pageaktif < $jumlahpage): ?>
            <a href="?page=<?= $pageaktif + 1 ?>">&raquo Next</a>
            <?php else: ?>
              <a title="Ini Page Terakhir" class="active">Next &raquo</a>
            <?php endif; ?>
        </div>
        </div>

        <div class="hidden-lg hidden-sm">
          <div class="paginationhp">
        
         <?php for($i = 1; $i <=$jumlahpage; $i++): ?>
            <?php if($i == $pageaktif): ?>
              <a class="active" href="?page=<?= $i; ?>"><?= $i; ?></a>
            <?php else: ?>
              <a href="?page=<?= $i; ?>"><?= $i; ?></a>
            <?php endif; ?>
         <?php endfor; ?>

         <?php if($pageaktif < $jumlahpage): ?>
            <a href="?page=<?= $pageaktif + 1 ?>">&raquo Next</a>
            <?php else: ?>
              <a title="Ini Page Terakhir" class="active">Next &raquo</a>
            <?php endif; ?>
        </div>
        </div>
      
      <p class="text-muted">Menampilkan Halaman <?= $pageaktif ?> Dari <?= $jumlahpage ?> Halaman</p>
      <hr><br><br>

      <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h3><i class="fa fa-location-arrow"></i> Sekilas Tentang garapcode</h3>
        <hr>
        <h1 class="logo">< g/c></h1>
        <p>Merupakan website berbasis artikel dimana semua orang bisa berkontribusi dalam membuat artikel sekaligus menyalurkan bakat menulis dan imajinasi ketika membuat sebuah artikel, kami memang bukan portal website yang sudah terkenal tapi kami mencoba untuk berkreasi dan masih tahap belajar juga dan tidak bisa di pungkiri bahwa website ini masih sangat banyak kekurangan.</p>
        <p>Anda sebagi user biasa pun bisa mencoba untuk menilai artikel-artikel yang masuk dalam website ini dan kami berharap website ini bisa menjadi sarana membaca yang bagus bagi banyak orang</p>
        <p>Di website ini anda bisa menuliskan artikel apa saja yang bisa bermanfaat dan di akses oleh public dan kami juga berharap agar semuanya bisa mendukung website ini agar terus berkembang kedepanya</p>
        <p>Website ini di racik dengan perpaduan php dan html di taburi sedikit javascript dan di percantik dengan bootstrap 3 dan juga css</p>
      </div>

      <div class="col-md-10">
        <h3><i class="fa fa-github"></i> Sekilas Web Developer</h3>
        <hr>
        <div class="col-md-3">
          <a title="Apa liat-liat?" href="bg/blur.jpg"><img class="img-responsive img-thumbnail" src="bg/blur.jpg"></a>
          <h3>Adam Zulianto</h3>
          <p class="text-muted">orang aneh yang lebih suka benda lama meski butut daripada benda baru yang lebih mewah</p>
          <hr>
        </div>
    
        <p>Saya adalah seorang siswa smk informatika dan website ini adalah website persembahan saya sebelum lulus sekolah, ini adalah website pertama saya yang saya hosting ke internet agar bisa di lihat banyak orang dan juga untuk mengukur kemampuan saya, saya bercita-cita menjadi seorang programmer dan saat ini masih newbie dan juga berkeinginan untuk melanjutkan pendidikan ke perguruan tinggi untuk menambah wawasan programming saya</p>
        <p>saya sehari-hari menghabiskan waktu untuk belajar ngoding dan biasanya saya menjadikan internet untuk guru pribadi saya dan juga grup-grup di media sosial untuk bisa memecahkan masalah ketika program saya error</p>
        <p>programming website bagi saya adalah sebuah hobby bukanlah sebuah pelajaran, selain programming website saya juga hobby untuk editing video walaupun belum begitu mahir</p>
      </div>

      <div class="col-md-7 col-md-offset-2">
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
    <script type='text/javascript' src="js/animate.js"></script>

  </body>
</html>
