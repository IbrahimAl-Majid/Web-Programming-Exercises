<center><h3>DATA MAHASISWA</h3></center>
<table border = 1>
	<tr>
		<td><b>No</b></td>
		<td><b>NIM</b></td>
		<td><b>Nama</b></td>
		<td><b>Tanggal Lahir</b></td>
		<td><b>Tempat Lahir</b></td>
		<td><b>Usia</b></td>
	</tr>

	<?php
		$namaFile = "datamhs.dat";
		$myfile = fopen($namaFile, "r");
		$no = 1;
		$today = new DateTime("today");
		while(!feof($myfile)){
			$data = fgets($myfile);
			$expData = explode("|", $data);
			$tglLahir = new DateTime($expData[2]);
			$usia = $today->diff($tglLahir)-> y;
			
			echo "<tr>";
			echo "<td>$no</td>";
			echo "<td>$expData[0]</td>";
            echo "<td>$expData[1]</td>";
            echo "<td>$expData[2]</td>";
            echo "<td>$expData[3]</td>";
            echo "<td>$usia tahun</td>";
            echo "<tr>";
            $no++;
		}

		fclose($myfile);
	?>
</table>

<?php
	$jmlData = count(file($namaFile));
	echo "Jumlah Data : $jmlData";
?>