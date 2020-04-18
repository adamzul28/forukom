<?php 
  session_start();
  if(!isset($_SESSION["loging"])){
    header("Location:index.php");
    exit;
  }
  require 'fungsi.php';

  $id = $_GET["id"];
  if(approve($id) > 0 ){
     ?>
        <script type="text/javascript">
          document.location.href = 'adming.php';
        </script>
      <?php
  }else{
    echo mysqli_error($koneksi);
  }
 ?>