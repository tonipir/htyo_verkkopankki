<?php
	require "connection.php";
	$sql = "SELECT name, author, idBooks FROM books";

	$resultObject = $db->query($sql);

	$resultArray = $resultObject->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($resultArray);
?>
