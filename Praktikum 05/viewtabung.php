<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		echo "<h3><b>DATA UKURAN TABUNG</b></h3>";
		echo "<table border='1'>";
		echo "<thead>";
		echo "<tr>";
		echo "<td><b>NAMA TABUNG</b></td>";
		echo "<td><b>DIAMETER</b></td>";
		echo "<td><b>TINGGI</b></td>";
		echo "<td><b>LUAS</b></td>";
		echo "</tr>";
		echo "</tread>";

		$namafile = "datatabung.dat";
		$datatabung = fopen($namafile, "r");

		while (!feof($datatabung)) {
			$data = fgets($datatabung);
			$pecahdata = explode(",", $data);

			echo "<tr>";
			echo "<td>".$pecahdata[0]."</td>";
			echo "<td>".$pecahdata[1]."</td>";
			echo "<td>".$pecahdata[2]."</td>";
			echo "<td><a href='hitungluas.php?n=".$pecahdata[0]."&d=".$pecahdata[1]."&t=".$pecahdata[2]."'>view</a></td>";
			echo "</tr>";
		}
		fclose($datatabung);
	?>
</body>
</html>