<?php
session_start();
if( !isset($_SESSION['un']) )
    {
      header("Location: Login.php");
    }
$content ='

<h1>Delete User</h1>
<br><br><br><br><br><br>



<form action="deleteuser1.php" name="one" method="post">
         <table>

             <tr><td> Enter The Username</td><td><input  type="text" name= "un" id="name"/></td></tr>
             <tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="submit" value="  DELETE USER  " id="submit" />
             </td></tr>
</table>
</form>
    
        ';
      include('AdminMaster.php');
      ?>