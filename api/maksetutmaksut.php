<?php
	require "connection.php";//luodaan jälleen mysql yhteys connection.php:n kautta
        
	$sql = "SELECT Saaja, Viite, Saajan_tili, Summa FROM maksetut ;"; //tulostetaan taulusta maksetut tarvittavat tiedot

	$resultObject = $db->query($sql);

	$resultArray = $resultObject->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($resultArray);
