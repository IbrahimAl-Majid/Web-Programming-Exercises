<?php    
    session_start();
    include "koneksi.php";
    addPemain($_SESSION["name"], $_SESSION["email"], $_SESSION["score"]);
?>

<!DOCTYPE html>
<html>
    <head>
    </head>
<body>
    <form>
        Hallo <?php echo $_SESSION["name"];?>, Sayang permainan sudah selesai. Semoga lain kali bisa lebih baik.<br>
        Score Anda : <?php echo $_SESSION["score"]; ?><br><br>
        Hall of Fame
        
        <table>
            <tr>
                <td><b>No</b></td>
                <td><b>Nama</b></td>
                <td><b>Score</b></td>
            <tr>
            <?php
            $koneksi = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName) or die(mysqli_error());
            $sql = "SELECT * FROM tebak ORDER BY score DESC LIMIT 10";
            $result = mysqli_query($GLOBALS['koneksi'], $sql);
            if (mysqli_num_rows($result) > 0) {

                echo "
                <style>
                    table, th, td {
                        border: 1px solid black;
                        border-collapse: collapse;
                    }
                    td{
                        padding : 0px 10px;
                    }
                </style>
                ";

                $i = 1;
                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $i++. "</td>";
                    echo "<td>" . $row["Nama"] . "</td>";
                    echo "<td>" . $row["Score"] . "</td>";
                    echo "</tr>"; 
                }
            } else {
                
            }
            mysqli_close($GLOBALS['koneksi']);
            ?>
        </table>
        <br><a href="index.php">Main Lagi</a>
    </form>
</body>
</html>