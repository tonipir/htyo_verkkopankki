<?php
	require "connection.php";
        //toteutettu samalla tavalla kuin maksetutmaksut.php ja pankkikortit.php
	$sql = "SELECT Pvm,Saaja, Viite, Selite, Saajan_tili, Summa FROM tilitapahtumat WHERE idTili = '1' ;";

	$resultObject = $db->query($sql);

	$resultArray = $resultObject->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($resultArray);

