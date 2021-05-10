<?php
session_start();
$_SESSION["score"] = 0;
$_SESSION["lives"] = 5;

if (isset($_SESSION["email"])) {
    ?>
    Hallo <?php echo $_SESSION["name"];?>, selamat datang kembali di permainan ini!!!<br><br>
    <a href="game.php">Start Game</a><br><br>
    Bukan Anda? <a href="ulang.php"> Klik disini</a>
<?php
} else {
?>
    <form action="game.php" method="POST">
        <label>Nama</label>
        <input type="text" name="nama" id="name" placeholder="Masukkan Nama"><br>
        <label>Email</label>
        <input type="text" name="email" id="email" placeholder="Masukkan Email"><br><br>
        <button type="submit" name="mulai">Submit</button>
    </form>
<?php
}
?>