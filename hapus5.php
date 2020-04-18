<?php 
	require 'fungsi.php';

	$id = $_GET["id"];
	if(hapus5($id) > 0 ){
		 ?>
        <script type="text/javascript">
          document.location.href = 'motivasi.php';
        </script>
      <?php
	}else{
		echo mysqli_error($koneksi);
	}
 ?>