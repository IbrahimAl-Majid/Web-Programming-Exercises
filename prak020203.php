<?php
	$baris = 4;
	$kolom = 5;
	echo "<table border='1'>";
	for ($i = 0; $i < $baris; $i++) {
		echo "<tr>";
		for ($j = 1; $j <= $kolom; $j++) {
			if(($j + ($i * 5)) % 2 == 0) {
				echo "<td bgcolor='red'><font color='white'>",$j + ($i * 5),"</font></td>";
            }
			else {
                echo "<td bgcolor='white'><font color='red'>",$j + ($i * 5),"</font></td>";
            }
		}	
		echo "</tr>";
	}
	echo "</table>";
?>