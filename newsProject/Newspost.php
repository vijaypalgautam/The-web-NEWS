<?php
session_start();
if( !isset($_SESSION['un']) )
    {
      header("Location: Login.php");
    }
    $x=$_SESSION['un'];
$content ='


       <h1>Upload News</h1>
       <br><br><br>
      <form action="newspost1.php" method="post" enctype="multipart/form-data">
        <table width="70%">

            <tr><td colspan="2">

                <span id="ContentPlaceHolder1_Label1" style="color:Red;font-weight:bold;">Upload News Details</span></td></tr>

                <tr><td> Select News Category</td><td>

<select  name="newscat" >
<option value="---Select  News Category---"  selected="selected">---Select News Category---</option>
<option value="crime">Crime</option>

  <option value="polytics">polytics</option>
  <option value="sports">Sports</option>
  <option value="entertainment">Entertainment</option>
  <option value="international">International</option>
  
  </select>

                </td></tr>

            <tr><td>Enter Title</td><td><input name="title" type="text"  /></td></tr>

            <tr><td> Select image to upload:</td><td><input type="file" name="fileToUpload" id="fileToUpload"></td></tr>


             <tr><td>Enter News Content</td><td><textarea name="newscontent" cols="40" rows="7"></textarea></td></tr>

             <tr><td>News Repoter</td><td><input name="newsreporter"  value='. $x.' type="text"  /></td></tr>

              <tr><td>News Date</td><td><input name="newsdate"  value='.date("d/m/Y") .' type="text"  /></td></tr>

            <tr><td colspan="2" align="left">

                <input type="submit" value="Upload" name="submit"></td></tr>

        </table>
</form>'

      ;
      include('ReporterMaster.php');
      ?>

