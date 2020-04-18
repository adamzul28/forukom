<?php 
  session_start();
  if(isset($_SESSION["login"])){
    header("Location:admin.php");
    exit;
  }
  require 'fungsi.php';

  if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    // cek user
    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
    if(mysqli_num_rows($result) === 1 ){
      // cek pw
      $row = mysqli_fetch_assoc($result);
      $id = $row["id"];
      $nama = $row["nama"];
      $email = $row["email"];
      $foto = $row["foto"];
      if(password_verify($password, $row["password"])){
        $_SESSION["login"] = true;
        $_SESSION["id"] = $id;
        $_SESSION["nama"] = $nama;
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        $_SESSION["email"] = $email;
        $_SESSION["foto"] = $foto;
        header("location:admin.php");
        exit;
      }
    }
    $error = true;
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

    <title>garapcode - Kontributor penulis</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="jquery.js"></script>
    <script src="js/bootstrap.js"></script>
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
          
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="thumbnail">
            <form class="form-signin" action="" method="post">
              <h3 class="form-signin-heading">Login, Kontributor garapcode</h3><br>
              <label for="inputEmail" class="sr-only">Username</label>
              <input type="text" name="username" id="inputEmail" class="input" placeholder="Username" autocomplete="off"  autofocus>

              <p class="text-right warna getar">
                <?= @$_GET["username"]; ?>
              </p>
              
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" name="password" id="inputPassword" class="input" placeholder="Password" >

              <p class="text-right warna getar">
                <?= @$_GET["password"]; ?>
              </p>
                
                <p>Belum Punya Akun? <a href="daftar.php">Sign Up</a></p>

                <?php if(isset($error)): ?>
                  <p class="getar text-right warna">* Username Atau password Salah!</p>
                <?php endif; ?>
              
              <button class="btn btn-lg btn-primary btn-block" type="submit" name="login"><i class="fa fa-sign-in"></i> Sign in</button><br><br><br><br>
                <p class="text-muted text-center">Copyright&copy GarapCode-2018</p>
            </form>
          </div>
        </div>
      </div>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
