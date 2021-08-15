<?php
//session_start();
require_once('config.php');
$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) or die('Could not connect to database server.');

$SQL = "select * from crime order by NewsId desc";
$result = mysqli_query($conn, $SQL);
$content='<center><table>';
while ($row = mysqli_fetch_array($result)) 
{

	$content = $content .'<tr><td colspan="2" align="center" ><h2>'. $row{'NewsTitle'}.'</h2></td></tr>


	<tr><td align="center" colspan="2"><img width="470px" height="300px" src ='.$row{'NewsImage'}.'></td></tr>

	<tr><td colspan="2">'.$row{'NewsContent'}.'</td></tr><tr><td>Repoter :-'.$row{'NewsReporter'}.'</td><td>Date :-'.$row{'Newsdate'}.'</td></tr>';
	}
$content = $content .'</table></center>';

      include('mainmaster.php');

      ?>