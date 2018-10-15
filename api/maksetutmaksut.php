<?php
	require "connection.php";//luodaan jälleen mysql yhteys connection.php:n kautta
        
	$sql = "SELECT Saaja, Viite, Saajan_tili, Summa FROM maksetut ;"; //tulostetaan taulusta "maksetut" tarvittavat tiedot

	$resultObject = $db->query($sql);//PDO tyylistä mysql-kyselystä saatujen tietojen sijoittamista muuttujaan,

	$resultArray = $resultObject->fetchAll(PDO::FETCH_ASSOC);//jonka jälkeen sijoitetaan tiedot taulukkoon

	echo json_encode($resultArray); //tietojen tulostusta json encodella
