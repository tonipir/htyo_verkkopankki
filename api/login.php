<?php
require "connection.php"; //vaaditaan connection.php jotta voidaan jatkaa
	$username=$_POST['username']; //asetetaan formissa annettu käyttäjänimi muuttujaan username
  $password=$_POST['password']; //asetetaan formissa annettu salasana muuttujaan password
//otetaan idkayttaja talteen muuttujaan, sieltä missä käyttäjänimi ja salasana täsmäävät
  $sql = $db->prepare("SELECT idkayttaja FROM tunnukset WHERE username = :username AND password = :password");
  $sql->bindParam(':username',$username);
  $sql->bindParam(':password',$password);
  $sql->execute();
	$result = $sql->fetch(PDO::FETCH_ASSOC);

    $success = $result['idkayttaja'];

    if($success > 0){//jos täsmää, siirrytään index.php sivulle
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['idkayttaja']=$success;
        header("Location: ../ui/index.php");
        exit();
    }
    else {// jos ei täsmää, ei tehdä mitään eli pysytään kirjautumissivulla
      header("Location: http://jukkajauhiainen.ipt.oamk.fi/~t8pito01/htyo_verkkopankki/ui/login.html"); 
    }
?>
