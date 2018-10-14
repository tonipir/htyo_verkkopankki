<?php
	require "connection.php";
        
	$sql = "SELECT Kortin_tyyppi, Voimassa FROM pankkikortti WHERE idKortti = '1' ;";

	$resultObject = $db->query($sql);

	$resultArray = $resultObject->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($resultArray);

