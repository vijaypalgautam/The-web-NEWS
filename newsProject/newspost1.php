<?php
$target_dir = "uploads/";
$newscat = $_POST["newscat"]; 
$title = $_POST["title"]; 
$newscontent = $_POST["newscontent"]; 
$newsreporter = $_POST["newsreporter"]; 
$newsdate = $_POST["newsdate"]; 


$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

require_once('config.php');
$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) or die('Could not connect to database server.');

$SQL = "insert into ".$newscat."(NewsTitle,NewsImage,NewsContent,NewsReporter,NewsDate) values('$title','$target_file', '$newscontent','$newsreporter','$newsdate')";
$result = mysqli_query($conn, $SQL);
mysqli_close($conn);


move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
      
     

$message= "Article sent";
    echo '<script language = "javascript">';
    echo 'alert("'.$message.'");';
    echo 'location="Reporterindex.php";';
    echo '</script>';


?>
