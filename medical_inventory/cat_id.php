<?php
session_start();
$user= $_SESSION['user'];
if(!isset($_SESSION['user']))
{echo'<script> window.location.href="login.php?msg=You Must Login First!"; </script>';}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cat_id ajax</title>
</head>

<body>

<?php

	
	$names= $_REQUEST['q'];
	
	include("include/db.php");
	
 $qry="select * from cat_insert where cat_name= '$names'";
	
	$result= mysql_query($qry);
	
	?>
    
    
	 <select>
<?php 


while($row= mysql_fetch_array($result))
{
	echo "<option value='".$row['id']."'>".$row['id']."</option>";


}

mysql_close($conn);
?>


</select>

</body>
</html>