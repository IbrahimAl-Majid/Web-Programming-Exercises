<?php
	function hitungDenda($tglHarusKembali, $tglKembali){
		$pecahTglHK = explode("-", $tglHarusKembali);
		$dateTglHK = $pecahTglHK[2];
		$monthTglHK = $pecahTglHK[1];
		$yearTglHK = $pecahTglHK[0];

		$pecahTglK = explode("-", $tglKembali);
		$dateTglK = $pecahTglK[2];
		$monthTglK = $pecahTglK[1];
		$yearTglK = $pecahTglK[0];

		$tglHK = GregorianToJD($monthTglHK, $dateTglHK, $yearTglHK);
		$tglK = GregorianToJD($monthTglK, $dateTglK, $yearTglK);

		$totalHariTerlambat = $tglK - $tglHK;

		if ($totalHariTerlambat > 0){
			$denda = $totalHariTerlambat * 3000;
			echo "Besar denda adalah: Rp ".$denda;			
		} else {
			echo "Besar denda adalah: Rp 0";
		}
	}
	echo hitungDenda("2021-04-01", "2021-04-07");
?>