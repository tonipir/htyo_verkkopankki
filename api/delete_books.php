<?php
	session_start();
	if(isset($_SESSION['idUsers'])) {
		require "connection.php";
		$id=$_GET['id'];

		$stmt=$db->prepare("DELETE FROM books WHERE idBooks = :id");
		$stmt->bindParam(':id',$id);
		$stmt->execute();
		http_response_code(201);
	}
	else {

	}
	?>
