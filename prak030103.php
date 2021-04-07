<?php
	function buatBintangLagi($n){
		echo "<pre>";
		for($i=$n; $i>=1; $i--){
			for($j=$i; $j>=1; $j--){
				echo "*";
			}
			echo "\n";
		}
		echo "<pre>";
	}

	buatBintangLagi(4);
?>