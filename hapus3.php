<?php 
	require 'fungsi.php';

	$id = $_GET["id"];
	if(hapus3($id) > 0 ){
		 ?>
        <script type="text/javascript">
          document.location.href = 'user.php';
        </script>
      <?php
	}else{
		echo mysqli_error($koneksi);
	}
 ?>