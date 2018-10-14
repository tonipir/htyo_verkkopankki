<?php
	include 'connection.php';

	$name=$_POST['name'];
	$author=$_POST['author'];

	$sql=$db->prepare("INSERT INTO books (name,author) VALUES(:a_name,:a_author)");
	$sql->bindParam(':a_name',$name);
	$sql->bindParam(':a_author',$author);
	$sql->execute();

	http_response_code(201);
?>
