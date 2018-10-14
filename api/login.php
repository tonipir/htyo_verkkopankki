<?php
require "connection.php";
	$username=$_POST['username'];
  $password=$_POST['password'];

  $sql = $db->prepare("SELECT idkayttaja FROM tunnukset WHERE username = :username AND password = :password");
  $sql->bindParam(':username',$username);
  $sql->bindParam(':password',$password);
  $sql->execute();
	$result = $sql->fetch(PDO::FETCH_ASSOC);

    $success = $result['idkayttaja'];

    if($success > 0){
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['idkayttaja']=$success;
        header("Location: ../ui/index.php");
        exit();
    }
    else {
      header("Location: ../htyo_verkkopankki/ui/login.html"); 
    }
?>
