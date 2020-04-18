<?php 
	require 'fungsi.php';

	$id = $_GET["id"];
	if(hapus4($id) > 0 ){
		 ?>
        <script type="text/javascript">
          document.location.href = 'komentar.php';
        </script>
      <?php
	}else{
		echo mysqli_error($koneksi);
	}
 ?>