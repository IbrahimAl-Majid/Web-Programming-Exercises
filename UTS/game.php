<?php
	session_start();
	if (isset($_SESSION["email"])) {
	} else {
		$_SESSION["name"] = $_POST["nama"];
		$_SESSION["email"] = $_POST["email"];
	}
	if ($_SESSION["lives"] == 0) {
		header('Location: gameover.php');
	}

	$bil1 = rand(0,20);
	$bil2 = rand(0,20);
	$hasil = $bil1 + $bil2;
	$_SESSION["hasil"] = $hasil;
?>

<form action="cek.php" method="POST">
                Hallo <?php echo $_SESSION["name"];?>, tetap semangat ya...you can do the best!!!<br>
                Lives: <?php echo $_SESSION["lives"];?> | Score: <?php echo $_SESSION["score"];?><br><br>
                <label>Berapakah <?php echo $bil1; ?> + <?php echo $bil2; ?> =</label>
                <input name="hasil" placeholder="Masukkan Jawaban" type="number">
                <button type="submit" value="jawab">Submit</button>
</form>