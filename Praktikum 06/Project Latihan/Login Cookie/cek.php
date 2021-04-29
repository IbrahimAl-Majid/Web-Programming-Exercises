<?php
	// mengecek keberadaan cookie 'namauser'

	if (!isset($_COOKIE['namauser'])) {
		echo "<p>Hayoo.. mau coba nge by-pass ya?</p>";
		echo "<p><a href='login.html'>Login</a> dulu ya..</p>";

		//setelah memunculkan pesan diatas, selanjutnya dibreak dengan exit()
		exit();
	}
?>