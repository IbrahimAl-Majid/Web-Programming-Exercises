<?php    
    session_start();
?>

Hallo <?php echo $_SESSION['name']; ?>, Sayang jawaban Anda salah… tetap semangat ya !!!<br>
Lives: <?php echo $_SESSION['lives']; ?> | Score: <?php echo $_SESSION['score']; ?><br><br>
<a href='game.php'>Soal berikutnya</a>