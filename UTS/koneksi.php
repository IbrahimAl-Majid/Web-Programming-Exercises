<?php
$databaseHost = 'localhost'; 
$databaseName = 'tebakan'; 
$databaseUsername = 'root'; 
$databasePassword = '';
$koneksi = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

function addPemain($nama, $email, $score){
    $sql = "INSERT INTO tebak (Nama, Email, Score) VALUES('".$nama."','".$email."','".$score."')";
    if (mysqli_query($GLOBALS['koneksi'], $sql)) {
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($GLOBALS['koneksi']);
      }
    mysqli_close($GLOBALS['koneksi']);
}
?> 