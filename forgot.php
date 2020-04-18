<?php 
  session_start();
  if(isset($_SESSION["login"])){
    header("Location:admin.php");
    exit;
  }
  require 'fungsi.php';

  if(isset($_POST["forgot"])){
    if(lupa($_POST) > 0 ){
      echo "berhasil terkirim";
    }
  }else{
    echo mysqli_error($koneksi);
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

    <title>SignIn Admin GarapCode</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
     <link href="css/foundation.css" rel="stylesheet">
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
           <form action="" method="post">
              <input type="text" class="form-control" name="email">
              <button type="submit" name="forgot">Go</button>
           </form>
          </div>
        </div>
      </div>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
