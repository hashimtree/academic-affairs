
<?php 
	include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>🪕 Fetch image Gezira College</title>
</head>
<body>
<div style="background-color:rgba(100,200,255,0.5);" align="center">
    <form action="show3.php" method="post" enctype="multipart/form-data">
        <h2>©Gezira College | <a href="show.php" >Veiw All Image</a>   | <a href="indexi.php" >Add Image | <a href="show3.php" >Show Single Record</a></td></tr></h2><br><br>
        <table>                             
        
         <tr><td height="70" width="100">id</td><td><input type="int" autocomplete="on" required="required" name="univn" class="resizedTextbox"><br><br></td></tr>
    
       
        <tr><td colspan="2"><input class="cck" type="submit" name="notification" value="Show One"/></td></tr>
       
       
       
       
        </table>
</form>
</div>
</body>
</html>


<!DOCTYPE html>
<html>
<body>
<?php
include("database.php");

if(isset($_POST['notification'])){
	$univn = $_POST['univn'];
echo" . $univn . ";	
}




  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>رفع الصور</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>
    
<table class="table table-bordered" border="2">
<tr> <td colspan="5"><center><h3>Previously Uploaded | <a href="indexi.php" >Add Image</a></td></tr>
  <tr> 
      <tr><center> <th>id </th><th>الاسم</th><th>Image</th><th>Link</th> <th>الدفعة</th><th>الرقم الجامعي</th></th><th>الفصل الدراسي  </th>
      <th> الكلية</th>
        <th>Payment id</th><th>Paid all fees</th>  <th>Registration</th> <th>Time</th><th>Amount</th> <th>Purpose</th> <th>Academic State</th><th>FNI</th>
      </center></tr>
   
    <?php 
    
    include("database.php");

if(isset($_POST['notification'])){
	$id = $_POST['id'];
	
}

    $fetchqry = "SELECT id,name, type, sem,batch,college,univn, imagename,fees,time,registration, amount,feestype,academicstate,state FROM image WHERE univn=$univn ORDER BY time DESC";
    
    $result=mysqli_query($mysqli,$fetchqry);
    $num=mysqli_num_rows($result);
    if($num > 0){
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){ ?>
      <tr><td width="60px"><p><?php echo $row['id'];?></p></td><td width="120px"><p><?php echo $row['name'];?></p></td><td><img width="auto" src="image/<?php echo $row['imagename'];?>" width="100px" height="100px" /> </td><td width="17"><?php echo"http://www.geziracollegesudan.com/image/";echo$row["imagename"];?></td>
      <td width=20px><?php echo $row['batch']; ?></td><td width=20px><?php echo $row['univn']; ?></td><td width=20px><?php echo $row['sem']; ?></td><td width="15px"><?php echo $row['college']; ?></td><td width="20px"><?php echo $row['type']; ?></td>   
     <td width="20px"><?php echo $row['fees']; ?></td>
     
     <td width="20px"><?php echo $row['registration']; ?></td>
     
     <td width="100px"><?php echo $row['time']; ?></td>
       <td width="20px"><?php echo $row['amount']; ?></td>
     
     <td width="100px"><?php echo $row['feestype']; ?></td>
     
      <td width="100px"><?php echo $row['academicstate']; ?></td>
      <td width="100px"><?php echo $row['state']; ?></td>
      
     </tr> 
     
     
      <?php
    }
    }
    ?>
  </tr>
</table>
</div>

<td width="10%"><input type="button" class="btn" value="Delete" id="button" onclick="deleteme(<?php echo $row['college']; ?>)"></td>


</body>
</html>