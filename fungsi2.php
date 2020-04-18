<?php 
	$koneksi = mysqli_connect('localhost','root','','forukom');

	function register($data){
		global $koneksi;

		$username = strtolower(stripslashes($data["username"]));
		$password = mysqli_real_escape_string($koneksi, $data["password"]);
		$password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

		if(empty($username)){
			header("Location:daftaradming.php?username=* Username tidak boleh kosong!");
			return false;
		}

		if(empty($password)){
			header("Location:daftaradming.php?password=* Password tidak boleh kosong!");
			return false;
		}

		if(empty($password2)){
			header("Location:daftaradming.php?password2=* Konfirmasi password tidak boleh kosong!");
			return false;
		}

		// cek user
		$result = mysqli_query($koneksi, "SELECT username FROM adming WHERE username = '$username'");
		if(mysqli_fetch_assoc($result)){
			header("Location:daftaradming.php?sama=* username tersebut telah di gunakan!");
			return false;
		}

		// konfir
		if($password !== $password2){
			header("Location:daftaradming.php?konfirmasi=* konfirmasi password tidak sesuai!");
			return false;
		}

		// enksipsi
		$password = password_hash($password, PASSWORD_DEFAULT);

		// insert
		$query = "INSERT INTO adming(username,password)VALUES('$username', '$password')";
		mysqli_query($koneksi, $query);

		return mysqli_affected_rows($koneksi);

	}
 ?>