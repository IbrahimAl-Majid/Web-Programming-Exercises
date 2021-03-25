<?php
	$baris = 4;
	$kolom = 5;
	echo "<table border='1'>";
	for ($i = 0; $i < $baris; $i++) {
		echo "<tr>";
		for ($j = 1; $j <= $kolom; $j++) {
			echo "<td>",$j + ($i * 5),"</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>