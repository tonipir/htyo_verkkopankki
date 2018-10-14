<?php
	require "connection.php";
        
	$sql = "SELECT Saaja, Viite, Saajan_tili, Summa FROM maksetut ;";

	$resultObject = $db->query($sql);

	$resultArray = $resultObject->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($resultArray);
