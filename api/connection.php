<?php
	try
	{
	 $conn_string = "mysql:host=localhost;dbname=t8pito01"; //tässä asetetaan host sekä tietokannan nimi,
	 $db = new PDO ($conn_string, "t8pito01", "seppotaalasmaa");// joka tässä tapauksessa on sama kuin käyttäjänimi
	 $db->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//tässä errorin käsittelyä
	
	}
	catch (PDOException $e)
	{
	 print ("Cannot connect to server\n");//riippuen errorista, tulostetaan käyttäjälle tieto, että nyt ei mennyt putkeen
	 print ("Error code: " . $e->getCode () . "\n");
	 print ("Error message: " . $e->getMessage () . "\n");
	}
	?>
