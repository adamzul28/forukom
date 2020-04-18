<?php 
	$koneksi = mysqli_connect('localhost', 'root', '', 'forukom');

	function query($query){
		global $koneksi;

		$result = mysqli_query($koneksi, $query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[]= $row;
		}
		return $rows;
	}

	function chat($data){
		global $koneksi;
		$nama = $data["nama"];
		$flag = $data["flag"];
		$pesan = htmlspecialchars($data["pesan"]);

		mysqli_query($koneksi, "INSERT INTO chat(nama,flag,pesan)VALUES('$nama',$flag,'$pesan')");
		return mysqli_affected_rows($koneksi);
	}
	
	function hapus($id){
		global $koneksi;

		mysqli_query($koneksi, "DELETE FROM artikel WHERE id = $id");

		return mysqli_affected_rows($koneksi);
	}


	function hapus3($id){
		global $koneksi;

		mysqli_query($koneksi, "DELETE FROM user WHERE id = $id");

		return mysqli_affected_rows($koneksi);
	}

	function hapus4($id){
		global $koneksi;

		mysqli_query($koneksi, "DELETE FROM komentar WHERE id = $id");

		return mysqli_affected_rows($koneksi);
	}

	function hapus5($id){
		global $koneksi;

		mysqli_query($koneksi, "DELETE FROM motivasi WHERE id = $id");

		return mysqli_affected_rows($koneksi);
	}

	function cari($keyword){
		$_SESSION["keyword"] = $keyword;
		$query = "SELECT * FROM artikel 
		WHERE
		judul LIKE '%$keyword%' OR
		tag LIKE '%$keyword%' OR
		penulis LIKE '%$keyword%' OR
		isi LIKE '%$keyword%'
		";

		return query($query);
	}

	function input($data){
		global $koneksi;

		$id_user = $data["id_user"];
		$judul = strip_tags($data["judul"]);
		$tag = htmlspecialchars($data["tag"]);
		$penulis = strip_tags($data["penulis"]);
		$pengirim = $data["pengirim"];
		$foto = $data["foto"];
		$isi = $data["isi"];
		$tgl = date("Y-m-d H-i-s");
		$sumber = strip_tags($data["sumber"]);
		$gambar = $_FILES['gambar']['name'];
		move_uploaded_file($_FILES['gambar']['tmp_name'],'gambar/'.$_FILES['gambar']['name']);

		if(empty($judul)){
			header("Location:input_artikel.php?judul=* Judul tidak boleh kosong");
			return false;
		}

		if(empty($penulis)){
			header("Location:input_artikel.php?penulis=* Penulis tidak boleh kosong");
			return false;
		}

		if(empty($tag)){
			header("Location:input_artikel.php?tag=* Tag tidak boleh kosong");
			return false;
		}

		if(empty($isi)){
			header("Location:input_artikel.php?isi=* Artikel tidak boleh kosong");
			return false;
		}

		if(empty($gambar)){
			header("Location:input_artikel.php?gambar=* Gambar tidak boleh kosong");
			return false;
		}
		if(empty($sumber)){
			header("Location:input_artikel.php?sumber=* Sumber Gambar tidak boleh kosong");
			return false;
		}

		$query = "INSERT INTO artikel(id_user,judul,tag,penulis,pengirim,foto,isi,gambar,sumber,tgl)VALUES('$id_user', '$judul', '$tag', '$penulis', '$pengirim', '$foto', '$isi', '$gambar','$sumber','$tgl')";
		mysqli_query($koneksi, $query);
		$_SESSION["judul"] = $judul;

		return mysqli_affected_rows($koneksi);

	}

	function update($data){
		global $koneksi;

		$id = $data["id"];
		$id_user = $data["id_user"];
		$judul = strip_tags($data["judul"]);
		$penulis = strip_tags($data["penulis"]);
		$tag = htmlspecialchars($data["tag"]);
		$pengirim = $data["pengirim"];
		$isi = $data["isi"];
		$gambarlama = $data["gambarlama"];

		if($_FILES['gambar']['error'] === 4 ){
			$gambar = $gambarlama;
		}else{
			$gambar = $_FILES['gambar']['name'];
			move_uploaded_file($_FILES['gambar']['tmp_name'],'gambar/'.$_FILES['gambar']['name']);
		}

		$query = "UPDATE artikel SET 
		judul = '$judul',
		penulis = '$penulis',
		tag = '$tag',
		isi = '$isi',
		gambar = '$gambar'
		WHERE id = $id;
		";

		mysqli_query($koneksi, $query);

		return mysqli_affected_rows($koneksi);

	}

	function approve($id){
		global $koneksi;

		$id = $id;
		$query = "UPDATE artikel SET flag = 1 WHERE id = $id";
		mysqli_query($koneksi, $query);
		return mysqli_affected_rows($koneksi);
	}

	function updateprof($data){
		global $koneksi;

		$id = $data["id"];
		$nama = $data["nama"];
		$email = $data["email"];
		$username = $data["username"];
		$password = password_hash($data["password"], PASSWORD_DEFAULT);
		$fotolama = $data["fotolama"];

		if($_FILES['foto']['error'] === 4 ){
			$foto = $fotolama;
		}else{
			$foto = $_FILES['foto']['name'];
			move_uploaded_file($_FILES['foto']['tmp_name'],'foto/'.$_FILES['foto']['name']);
		}

		$query = "UPDATE user SET 
		nama = '$nama',
		email = '$email',
		username = '$username',
		password = '$password',
		foto = '$foto'
		WHERE id = $id
		";

		mysqli_query($koneksi, $query);

		return mysqli_affected_rows($koneksi);

	}

	function motiv($data){
		global $koneksi;
		$nama = strip_tags($data["nama"]);
		$isi = strip_tags($data["isi"]);
		mysqli_query($koneksi, "INSERT INTO motivasi(nama,isi)VALUES('$nama','$isi')");
		return mysqli_affected_rows($koneksi);
	}

	function balas($data){
		global $koneksi;
		$nama = $data["nama"];
		$flag = $data["flag"];
		$pesan = strip_tags($data["pesan"]);

		mysqli_query($koneksi, "INSERT INTO chat(nama,flag,pesan)VALUES('$nama', $flag,'$pesan')");
		$_SESSION["flag"] = $flag;
		return mysqli_affected_rows($koneksi);
	}

	function komen($data){
		global $koneksi;
		$id = $data["id"];
		$id_artikel = $data["id_artikel"];
		$nama = strip_tags($data["nama"]);
		$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
		$isi = strip_tags($data["isi"]);
		
		if(!$email){
			?>
				<script type="text/javascript">
					alert('Alamat email tidak valid... Gagal Komentar!');
				</script>
			<?php
			return false;
		}

		if(empty($isi)){
			?>
				<script type="text/javascript">
					alert('Kolom komentar tidak boleh kosong!...Gagal Mengirim Komentar');
				</script>
			<?php
			return false;
		}

		if(empty($nama)){
			?>
				<script type="text/javascript">
					alert('Kolom Nama tidak boleh kosong!...Gagal Mengirim Komentar');
				</script>
			<?php
			return false;
		}

		if(empty($email)){
			?>
				<script type="text/javascript">
					alert('Kolom Email tidak boleh kosong!...Gagal Mengirim Komentar');
				</script>
			<?php
			return false;
		}

		mysqli_query($koneksi, "INSERT INTO komentar (id,id_artikel,nama,email,isi)VALUES('$id', '$id_artikel', '$nama', '$email', '$isi')");

		return mysqli_affected_rows($koneksi);
	}

	function register($data){
		global $koneksi;

		$nama = htmlspecialchars($data["nama"]);
		$username = strtolower(stripslashes($data["username"]));
		$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
		$password = mysqli_real_escape_string($koneksi, $data["password"]);
		$password2 = mysqli_real_escape_string($koneksi, $data["password2"]);
		$foto = $_FILES['foto']['name'];
		move_uploaded_file($_FILES['foto']['tmp_name'],'foto/'.$_FILES['foto']['name']);

		// jika kosong
		if(!$email){
			header("Location:daftar.php?filteremail=* Alamat email tidak valid!");
			return false;
		}

		if(empty($nama)){
			header("Location:daftar.php?nama=* Nama tidak boleh kosong!");
			return false;
		}

		if(empty($username)){
			header("Location:daftar.php?username=* Username tidak boleh kosong!");
			return false;
		}

		if(empty($foto)){
			header("Location:daftar.php?foto=* Foto tidak boleh kosong!");
			return false;
		}

		if(empty($password)){
			header("Location:daftar.php?password=* Password tidak boleh kosong!");
			return false;
		}

		if(empty($password2)){
			header("Location:daftar.php?password2=* Konfirmasi password tidak boleh kosong!");
			return false;
		}

		// cek user
		$result = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username'");
		if(mysqli_fetch_assoc($result)){
			header("Location:daftar.php?sama=* username tersebut telah di gunakan!");
			return false;
		}

		// cek email
		$result2= mysqli_query($koneksi, "SELECT email FROM user WHERE email = '$email'");
		if(mysqli_fetch_assoc($result2)){
			header("Location:daftar.php?email=* Email tersebut telah di gunakan!");
			return false;
		}


		// konfir
		if($password !== $password2){
			header("Location:daftar.php?konfirmasi=* konfirmasi password tidak sesuai!");
			return false;
		}

		// enksipsi
		$password = password_hash($password, PASSWORD_DEFAULT);

		// insert
		$query = "INSERT INTO user(nama,email,username,password,foto)VALUES('$nama', '$email', '$username', '$password', '$foto')";
		mysqli_query($koneksi, $query);

		return mysqli_affected_rows($koneksi);

	}

	
 ?>