<?php 
  session_start();
  if(!isset($_SESSION["login"])){
    header("Location:admin.php");
    exit;
  }
  include 'indos.php';
  require 'fungsi.php';
  if(isset($_POST["kirim"])){
    if(chat($_POST) > 0 ){
     header("Location:?kirim=* Pesan berhasil terkirim");
    }
  }else{
    echo mysqli_error($koneksi);
  }
  $nm = $_SESSION["nama"];
  $ids = $_SESSION["id"];

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
      <div class="row">
        <div class="col-md-8 col-md-offset-1">
          <h3><i class="fa fa-pencil"></i> Tulis Artikel</h3>
          <form method="post" enctype="multipart/form-data" action="load_artikel.php">
            <input type="hidden" name="id_user" value="<?= $_SESSION["id"]; ?>">
            <input type="hidden" name="pengirim" value="<?= $_SESSION["nama"]; ?>">
            <input type="hidden" name="foto" value="<?= $_SESSION["foto"]; ?>">
            <label>Masukan Judul (Min 15 Karakter - Max Berisi 85 Karakter )</label>
            <input type="text" name="judul" maxlength="85" minlength="15" class="form-control" autofocus>
              <p class="getar warna text-right">
                <?= @$_GET["judul"]; ?>
              </p>
            <br>
            <label>Masukan Penulis</label>
            <input type="text" name="penulis" class="form-control" minlength="2" maxlength="80">
              <p class="getar warna text-right">
                <?= @$_GET["penulis"]; ?>
              </p>
            <br>

            <label>Masukan Tag</label>
            <select name="tag" class="form-control">
              <option value="0">Pilih Tag</option>
              <option value="Agama">Agama</option>
              <option value="Olahraga">Olahraga</option>
              <option value="Pendidikan">Pendidikan</option>
              <option value="Motivasi">Motivasi</option>
              <option value="Tutorial">Tutorial</option>
              <option value="Lain-Lain">Lain-Lain</option>
            </select>
                <p class="getar warna text-right">
                  <?= @$_GET["tag"]; ?>
                </p>
            <br><br>

            <label>Masukan Artikel (Minimal Harus Berisi 1500 Karakter)</label>
            <textarea class="ckeditor" id="ckeditor" name="isi" minlength="1500" maxlength="10000" class="form-control" rows="10"></textarea>
              <p class="getar warna text-right">
                <?= @$_GET["kurang"]; ?>
                <?= @$_GET["isi"]; ?>
              </p>
            <br>

            <label>Masukan Gambar (Max 2 MB)</label>
            <input type="file" name="gambar">
                <p class="getar warna">
                  <?= @$_GET["gambar"]; ?>
                </p>
            <label>Sumber Gambar</label>
            <input type="text" name="sumber" class="form-control" placeholder="Misal: facebook.com/Adam Julianto">
                <p class="getar warna text-right">
                <?= @$_GET["sumber"]; ?>
              </p>
            <br>

            <button type="submit" name="upload" class="btn btn-danger"><i class="fa fa-upload"></i> Upload Artikel</button>

          </form><br><br><br>
           <div class="border">
            <ul>Note :
              <li>Artikel yang anda upload akan di tinjau dahulu oleh admin paling lama 12 jam</li>
              <li>Jangan Mengambil artikel Orang lain di internet</li>
              <li>Anda boleh menulis artikel yang ada di buku asalkan belum pernah ada di internet dan sertakan nama penulis buku tersebut</li>
              <li>Sertakan sumber gambar artikel anda misal jika dari instagram misal <a href="">instagram.com/Adam Zulianto28,</a> jika hasil gambar sendiri maka tulis nama anda</li>
              <li>artikel anda di tampilkan di halaman utama web, Harap desain tata letak artikel anda dengan baik, jika berantakan atau mengandung unsur negatif akan di hapus oleh garapcode!</li>
            </ul>
           </div><br><br><br>
           <div class="text-right">
             <h3>Jika Ada Pertanyaan Chat Kami Disini</h3>
             <button type="button" class="btn btn-success btn-lg" data-toggle="collapse" data-target="#chat">Chat garapcode</button>
             <p><?= @$_GET["kirim"]; ?></p>
           </div>
           <div class="pading" "></div>
           <div class="collapse" id="chat">
             <form action="" method="post">
               <input type="hidden" name="flag" value="<?= $_SESSION["id"]; ?>">
               <input type="hidden" name="nama" value="<?= $_SESSION["nama"]; ?>">
               <textarea name="pesan" autocomplete="off" autofocus class="form-control" rows="5" placeholder="Pertanyaan Anda.."></textarea>
               <div class="pading"></div>
               <button type="submit" name="kirim" class="btn btn-info">Kirim Pesan</button>
             </form>
             <div class="pading"></div>
             <h4 class="text-danger">Percakapan</h4>
             <div class="wadah">
               <?php foreach($pesan as $psn): ?>
                <h4>Saya</h4>
                <div class="hr4"></div>
                <p class="text-primary"><?= waktu_lalu($psn["tgl"]); ?></p>
                <p><?= $psn["pesan"]; ?></p>
                <div class="wadah2">
                 <h4>Admin</h4>
               </div>
                 <?php endforeach; ?>
             </div>
           </div>
        </div>
      </div>
    </div>
    <div style="padding: 60px;"></div>
    <div class="container">
      <hr>
      <footer>
        <p>&copy; Webs Creative 2018</p>
      </footer>
    </div> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/animate.js"></script>
  </body>
</html>
