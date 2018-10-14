<?php
	try
	{
	 $conn_string = "mysql:host=localhost;dbname=t8pito01";
	 $db = new PDO ($conn_string, "t8pito01", "seppotaalasmaa");
	 $db->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	}
	catch (PDOException $e)
	{
	 print ("Cannot connect to server\n");
	 print ("Error code: " . $e->getCode () . "\n");
	 print ("Error message: " . $e->getMessage () . "\n");
	}
	?>
