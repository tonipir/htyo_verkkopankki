<?php
$host = 'localhost';
$dbname = 't8pito01';//tässä käytetty includen tai requiren sijaan yhteyden muodostamista näin
$username = 't8pito01';
$password = 'seppotaalasmaa';
$con = mysqli_connect($host, $username, $password, $dbname); //muuttujiin on sijoitettu asetetut arvot
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();//virheen käsittelyä
}


  // mysqli_real_escape_string poistaa erikoismerkit syötetystä tiedosta tietoturvan parantamiseksi
//filter_input ja FILTER SANITIZE STRING erikoismerkkien poistoa
//FILTERILLÄ on useampia vaihtoehtoja
$numero = mysqli_real_escape_string($con,filter_input(INPUT_POST,'mn', FILTER_SANITIZE_STRING));
$snimi = mysqli_real_escape_string($con,filter_input(INPUT_POST,'nimi', FILTER_SANITIZE_STRING));
$viite = mysqli_real_escape_string($con,filter_input(INPUT_POST,'viite', FILTER_SANITIZE_STRING));
$stilinumero = mysqli_real_escape_string($con,filter_input(INPUT_POST,'st', FILTER_SANITIZE_STRING));
$summa = mysqli_real_escape_string($con,filter_input(INPUT_POST,'summa', FILTER_SANITIZE_STRING));
$sql = "INSERT INTO maksetut VALUES ('$numero', '$snimi', '$viite','$stilinumero', '$summa')";//tietojen lisääminen maksetut tauluun
if (!mysqli_query($con, $sql)) { // mysql tietokannan error testausta
die('Error: ' . mysqli_error($con));//suljetaan yhteys jos kaikki ei mene ok
}
echo "Maksu onnistui!";// jos päästy pois if lauseesta eli kaikki ok, tulostetaan maksu onnistui
header("Location: http://jukkajauhiainen.ipt.oamk.fi/~t8pito01/htyo_verkkopankki/ui/index.php");
mysqli_close($con); //yläpuolella käsketään pysymään edelleen etusivulla maksun jälkeen
