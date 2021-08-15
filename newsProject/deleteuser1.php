<?php 

 $un = $_POST["un"]; 


 //$date = date("d-m-Y");
require_once('config.php');
$conn = mysql_connect(DBHOST, DBUSER, DBPASS) or die('Could not connect to database server.');
mysql_select_db(DBNAME) or die('Could not select database.');
//$name = md5($name);
$SQL = "Delete  from userregistration where username ='$un'";
$result = mysql_query($SQL);
mysql_close($conn);
header("Location: userdeleted.php");


?>