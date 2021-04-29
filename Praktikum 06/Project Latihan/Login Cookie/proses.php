<?php
	//daftar users
	$users = array(
						array("username1", "Rosihan Ari Yuana", "123456"),
						array("username2", "Dwi Amalia Fitriani", "654321"),
						array("username3", "Faza Fauzan Khosyiyarrohman", "112233")
					);

	//jika form login sudah submitted
	if(isset($_POST['submit'])){
		setcookie("username"), $_POST['username'];
		setcookie("password"), $_POST['password'];

		//proses pengecekan ada tidaknya username dan password
		//dalam daftar user
		foreach ($users as $profile_user) {
			if (($profile_user[0] == $_POST['username') && ($profile_user[2] == $_POST['password'])) {
				setcookie("namauser"), $profile_user[1];

				//redirect halaman ke page1.php
				header("Location:page1.php");
			}
		}

		//jika tidk ada username dan password yang match
		echo "<h3>Login gagal</h3>";
		echo "<p>Silahkan <a href='login.html'>login kembali</a></p>";
	}
?>