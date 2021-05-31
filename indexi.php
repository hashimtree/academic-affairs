<?php 
	include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>©Gezira College</title>
</head>
<body>
<div style="background-color:rgba(100,100,250,0.5);" align="center">
    
        <h2>Image Uploading Section | <a href="show.php" >Veiw All Image</a> | <a href="show3.php" >Veiw Single record</a>  | <a href="indexi.php" >Add Image </a></h2></td></tr>
    <form action="uploading.php" method="post" enctype="multipart/form-data">    
    
    <table>  
         <tr><td height="70" width="100">University Number</td><td><input type="int" autocomplete="on" required="required" name="univn" class="resizedTextbox"></td></tr>
       
        
        <tr><td height="70" width="100">Name</td><td><input type="text" autocomplete="on" required="required" name="sname" class="resizedTextbox"></td></tr>
   
   
        
<tr><td height="70" width="80">All due Fees</td><td><select name="fees" id="fees" type="text" ><option vlalue="1">1</option><option vlalue="0">0</option></select></td></tr>

<tr><td height="70" width="100">Registration State</td><td><select name="registration" id="registration" type="text" ><option vlalue="1">Yes</option><option vlalue="0">No</option><option vlalue="0">Conditional</option></select><br></td></tr>


<tr><td height="70" width="100">رقم ايصال الرسوم</td><td><input type="int" autocomplete="on" required="required" name="ntype" class="resizedTextbox"></td></tr>
       
       <tr><td height="70" width="100">Amount</td><td><input type="int" autocomplete="on" required="required" name="amount" class="resizedTextbox"></td></tr>
       
       
      
<tr><td height="70" width="100">Purpose of Fees</td><td><select name="feestype" id="feestype" type="text" ><option vlalue="1">Study and Registration</option><option vlalue="0">Examination N/I/F</option><option vlalue="0">Punishment</option><option vlalue="0">Special Course</option><option vlalue="0">Graduation Certificate</option><option vlalue="0">Registration Certificate</option><option vlalue="0">Academic Transcript</option><option vlalue="0">Other</option></select></td></tr>
 
      <tr><td height="70" width="100">Academic State</td><td><select name="academicstate" id="academicstate" type="text" ><option vlalue="1">No N/I/F at all</option><option vlalue="0">i</option><option vlalue="0">N</option><option vlalue="0">F</option><option vlalue="0">Double F</option><option vlalue="0">First Propation</option><option vlalue="0">Second Propation</option><option vlalue="0">Repeat</option><option vlalue="0">Transfere</option><option vlalue="0">Sick/Permission..Upload photo</option></select></td></tr>
   
   
    <tr><td height="70" width="100">Academic State</td><td><select name="academicstate" id="academicstate" type="text" ><option vlalue="1">No N/I/F at all</option><option vlalue="0">i</option><option vlalue="0">N</option><option vlalue="0">F</option><option vlalue="0">Double F</option><option vlalue="0">First Propation</option><option vlalue="0">Second Propation</option><option vlalue="0">Repeat</option><option vlalue="0">Transfere</option><option vlalue="0">Sick/Permission..Upload photo</option></select></td></tr>
   
   
   
   
    <div style="width:200px;border-radius:6px;margin:0px auto">  
<table border="2">  
   <tr>  
      <td colspan="3">Select Semester with F/i/N and number of subjects:</td>  
   </tr>  
   <tr>  
      <td>Semester 1</td>  
      <td><input type="checkbox" name="state[]" value="Semester 1
      :"></td>  
   
   <td><input type="checkbox" name="state[]" value="F">F</td>  
    <td><input type="checkbox" name="state[]" value="i">i</td>  
    <td><input type="checkbox" name="state[]" value="N">N</td>  
    <td><input type="checkbox" name="state[]" value="Double F">Double F</td>  
    <td><input type="checkbox" name="state[]" value="Repeat">Repeat/Dismiss</td>  
    <td><input type="checkbox" name="state[]" value="First Propation">First Propation</td>  
       <td><input type="checkbox" name="state[]" value="Second Propation">Second Propation</td>  
   
   
   </tr>  
  
   <tr>  
   <td>Semester 2</td>  
      <td><input type="checkbox" name="state[]" value="PHP"></td>  
   </tr>  
   <tr>  
   <td>Semester 3</td>  
      <td><input type="checkbox" name="state[]" value="PHP"></td>  
   </tr>  
   <tr>  
      <td>Semester 4</td>  
      <td><input type="checkbox" name="state[]" value=".Net"></td>  
   </tr>  
   <tr>  
      <td>Semester 5</td>  
      <td><input type="checkbox" name="state[]" value="Java"></td>  
   </tr>  
   <tr>  
      <td>Semester 6</td>  
      <td><input type="checkbox" name="state[]" value="javascript"></td>  
   </tr>  

  <td>Semester 7</td>  
      <td><input type="checkbox" name="state[]" value="javascript"></td>  
   </tr>  

  <td>Semester 8</td>  
      <td><input type="checkbox" name="state[]" value="javascript"></td>  
   </tr>  


  <td>Semester 9</td>  
      <td><input type="checkbox" name="state[]" value="javascript"></td>  
   </tr>  

  <td>Semester 10</td>  
      <td><input type="checkbox" name="state[]" value="javascript"></td>  
   </tr>  



</table>  
</div>  
</body>  
</html>  
<tr><td colspan="2"><input type="file" class="cck" name="sfile" id="fileName" accept="image/*"><br></td></tr>
        <tr><td colspan="2"><input class="cck" type="submit" name="notification" value="Upload"/></td></tr>
        </table>
</form>
</div>
</body>
</html>


