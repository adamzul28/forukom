<?php 
  require 'fungsi2.php';
  session_start();
  if(isset($_SESSION["login"])){
    header("Location:admin.php");
    exit;
  }
  
  if(isset($_POST["daftar"])){
    if(register($_POST) > 0 ){
      ?>
        <script type="text/javascript">
          alert('TErdAftAr.. Gera Login..Hacker DiLaang MaSuk');
          document.location.href = 'loginadming.php';
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

    <title>Pendaftaran Adming GarapCode</title>

    <!-- Bootstrap core CSS -->
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
          <div style="height: 700px;" class="thumbnail">
            <form class="form-signin" action="" method="post" enctype="multipart/form-data">
              <h3 class="form-signin-heading">Pendaftaran Adming GarapCode</h3><br>
              <input type="text" name="username" id="inputEmail" class="input2" placeholder="Username"  autofocus>

              <p class="text-right getar warna">
                <?= @$_GET["username"]; ?>
              </p>

              
              <input type="password" name="password" id="inputPassword" class="input2" placeholder="Password" ><br><br>

              <p class="text-right getar warna">
                <?= @$_GET["password"]; ?>
              </p>

              
              <input type="password" name="password2" id="inputPassword" class="input" placeholder="Konfirmasi Password" ><br><br>

              <p class="text-right getar warna">
                <?= @$_GET["password2"]; ?>
              </p>

                <p>Sudah Punya Akun? <a href="login.php">Sign In</a></p>

                <p class="text-right getar warna">
                  <?= @$_GET["sama"]; ?>
                  <?= @$_GET["konfirmasi"]; ?>
                </p> 
              <button class="btn btn-lg btn-success btn-block" type="submit" name="daftar"><i class="fa fa-pencil"></i> Sign Up</button><br>
                <p class="text-muted text-center">Copyright&copy GarapCode-2018</p>
            </form>
          </div>
        </div>
      </div>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="jquery.js"></script>
  </body>
</html>
