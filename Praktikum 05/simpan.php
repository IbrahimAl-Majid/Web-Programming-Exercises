<?php
	if (isset($_POST['submit'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$tglLahir = $_POST['tgllhr'];
		$tempatLahir = $_POST['tmptlhr'];

		if (empty($nim) || empty($nama) || empty($tglLahir) || empty($tempatLahir)){
			echo "Anda harus melengkapi data di <a href='tambahdata.html'>form</a>";
		} else {
			$namafile = "datamhs.dat";
			$datamhs = fopen($namafile, "a") or die("Tidak bisa buka file");
			fwrite($datamhs, $nim."|");
			fwrite($datamhs, $nama."|");
			fwrite($datamhs, $tglLahir."|");
			fwrite($datamhs, $tempatLahir."\n");
			fclose($datamhs);
			echo "Data berhasil ditambahkan";
		}
	} else {
		echo "Anda harus mengisi data di <a href='tambahdata.html'>form</a> terlebih dahulu";
	}
?>