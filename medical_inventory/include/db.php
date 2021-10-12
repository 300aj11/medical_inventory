<?php 

    $conn = mysql_connect('localhost', 'root', '');
	 if (!$conn)
    {
	 die('Could not connect: ' . mysql_error());
	}
	$l=mysql_select_db("medical_inventory", $conn);
	if($l!=true)
	die ('Could not connect: ' . mysql_error());
?>

