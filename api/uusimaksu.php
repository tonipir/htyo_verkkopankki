<?php
$host = 'localhost';
$dbname = 't8pito01';
$username = 't8pito01';
$password = 'seppotaalasmaa';
$con = mysqli_connect($host, $username, $password, $dbname);
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


        
$numero = mysqli_real_escape_string($con,filter_input(INPUT_POST,'mn', FILTER_SANITIZE_STRING));
$snimi = mysqli_real_escape_string($con,filter_input(INPUT_POST,'nimi', FILTER_SANITIZE_STRING));
$viite = mysqli_real_escape_string($con,filter_input(INPUT_POST,'viite', FILTER_SANITIZE_STRING));
$stilinumero = mysqli_real_escape_string($con,filter_input(INPUT_POST,'st', FILTER_SANITIZE_STRING));
$summa = mysqli_real_escape_string($con,filter_input(INPUT_POST,'summa', FILTER_SANITIZE_STRING));
$sql = "INSERT INTO maksetut VALUES ('$numero', '$snimi', '$viite','$stilinumero', '$summa')";
if (!mysqli_query($con, $sql)) {
die('Error: ' . mysqli_error($con));
}
echo "Maksu onnistui!";
header("Location: http://jukkajauhiainen.ipt.oamk.fi/~t8pito01/htyo_verkkopankki/ui/index.php");
mysqli_close($con);
