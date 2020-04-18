<?php 
	require 'fungsi.php';

	$id = $_GET["id"];
	if(hapus($id) > 0 ){
		 ?>
        <script type="text/javascript">
          alert('Artikel berhasil di hapus');
          document.location.href = 'adming.php';
        </script>
      <?php
	}else{
		echo mysqli_error($koneksi);
	}
 ?>