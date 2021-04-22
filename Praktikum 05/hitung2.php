<?php
	$bil1 = $_POST['bil1'];
	$bil2 = $_POST['bil2'];

	if (isset($_POST['penjumlahan'])){
		$op = "+";
		$hasil = $bil1 + $bil2;
	} elseif (isset($_POST['pengurangan'])) {
		$op = "-";
		$hasil = $bil1 - $bil2;
	} elseif (isset($_POST['perkalian'])) {
		$op = "x";
		$hasil = $bil1 * $bil2;
	} elseif (isset($_POST['pembagian'])) {
		$op = "/";
		$hasil = $bil1 / $bil2;
	} elseif (isset($_POST['pangkat'])) {
		$op = "^";
		$hasil = $bil1 ** $bil2;
	}

	echo "<h2>".$bil1." ".$op." ".$bil2." = ".$hasil."</h2>";
?>