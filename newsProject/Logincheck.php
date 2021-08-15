<?php 
session_start();
 $un = $_POST["un"]; 
 $pass = $_POST["pass"]; 
$ut;
require_once('config.php');
$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) or die('Could not connect to database server.');


echo $SQL = "select * from userregistration  where username='$un' and password='$pass'";
$result = mysqli_query($conn, $SQL);
$count=mysqli_num_rows($result);
if($count>=1)
{
$_SESSION['un'] = $un;
while($row = mysqli_fetch_array($result))
{
	$ut =  $row['usertype'];
	if($ut=='Admin')
	{
header("Location: Adminindex.php");
	}
	else
	{
		header("Location: Reporterindex.php");
	}
	
}

}
// else
// {
// header("Location: Loginfailed.php");
// }


?>