<?php 

$conn = mysqli_connect('localhost', 'root', '', 'pw_183040115');

	function query($query) {
		global $conn; // IMPORTANT!
		$result = mysqli_query($conn, $query);

		$rows = [];
		while($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
	return $rows;
	}

	function plus($data) {
		global $conn;

		$gambar = $_FILES['gambar']['name'];
		$nama = htmlspecialchars($data['nama']);
		$jenis = htmlspecialchars($data['jenis']);
		$merek = htmlspecialchars($data['merek']);
		$harga = htmlspecialchars($data['harga']);

		$query = "INSERT INTO peralatan_elektronik 
		VALUES('', '$gambar', '$nama', '$jenis', '$merek', '$harga')";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

	function delete($id) {
		global $conn;
		mysqli_query($conn, "DELETE FROM peralatan_elektronik WHERE id = $id");

		return mysqli_affected_rows($conn);
	}

	function update($data) {
		global $conn;

		$id = $data['id'];
		$gambar = $_FILES['gambar']['name'];
		$nama = htmlspecialchars($data['nama']);
		$jenis = htmlspecialchars($data['jenis']);
		$merek = htmlspecialchars($data['merek']);
		$harga = htmlspecialchars($data['harga']);

		$query = "UPDATE peralatan_elektronik SET
				gambar 	= '$gambar',
				nama 	= '$nama',
				jenis 	= '$jenis',
				merek 	= '$merek',
				harga 	= '$harga'
				WHERE id = $id";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

	function search($keyword) {
	$query = "SELECT * FROM peralatan_elektronik WHERE
				nama LIKE '%$keyword%' OR
				jenis LIKE '%$keyword%' OR
				merek LIKE '%$keyword%' OR
				harga LIKE '%$keyword%'";
	return query($query);
	}

	function register($data) {
		global $conn;
		$username 	= strtolower(stripslashes($data['username']));
		$password1 	= mysqli_real_escape_string($conn, $data['password1']);
		$password2 	= mysqli_real_escape_string($conn, $data['password2']);
		//$created_at = setTimestamp($conn, $data['created_at']);

		//username existence
		$cek_user = mysqli_query($conn, "SELECT * FROM user_account WHERE username = '$username'");

		if(mysqli_num_rows($cek_user) > 0) {
			echo 
			"<script>
				alert('Username already exist!');
				document.location.href = 'register.php';
			</script>";
			return false;
		}

		//password confirmation
		if($password1 != $password2) {
			echo 
			"<script>
				alert('Password confirmation not match!');
				document.location.href = 'register.php';
			</script>";
			return false;
		}

		//password encryption
		$password = password_hash($password1, PASSWORD_DEFAULT);

		$query = "INSERT INTO user_account VALUES
					('', '$username', '$password')";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

?>