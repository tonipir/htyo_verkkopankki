<?php
	require "connection.php";
	$sql = "SELECT Etunimi, Sukunimi FROM opiskelija ;";

	$resultObject = $db->query($sql);

	$resultArray = $resultObject->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($resultArray);

