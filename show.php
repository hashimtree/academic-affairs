<?php 
    // Include config file
     include("config.php");
    
     $baseurl = "http://".$_SERVER['SERVER_NAME']."/";
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
<tr> <td colspan="5"><center><h3>Previously Uploaded | <a href="indexi.php" >Add Image | <a href="show3.php" >Show Single Record</a></td></tr>
  <tr> 
      <tr><center><th>Name</th><th>Card</th><th>University Number</th><th>Batch</th><th>College</th><th>Sem                      </th>
      <th>Full fees</th>    <th>id payment</th>
  <th>Registration state</th>
  <th>Amount</th><th>Purpose of Payment</th><th>id</th><th>Date</th><th>Academic State</th><th>Report</th><center/></tr>
  <?php $fetchqry = "SELECT * FROM `image` ORDER BY time DESC"; 
    $result=mysqli_query($con,$fetchqry);
    $num=mysqli_num_rows($result);
    if($num > 0){
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){ ?>
      <tr><td><?php echo $row['nname']; ?></td><td><img width="auto" src="image/<?php echo $row['imagename']?>" width="70" height="150" /> </td><td><?php echo $row['univn']; ?></td>
      <td><?php echo $row['batch']; ?></td>
         <td><?php echo $row['college']; ?></td>
      
      <td><?php echo $row['sem']; ?></td>
      <td><?php echo $row['fees']; ?></td>
      
    <td><?php echo $row['type'];?></td>
   
   
         
     
        <td><?php echo $row['registration']; ?></td>
      <td><?php echo $row['amount']; ?></td> <td><?php echo $row['feestype']; ?></td>
         <td><?php echo $row['id']; ?></td>
         
       
    <td><?php echo $row['time'];?></td>
    
      <td><?php echo $row['academicstate'];?></td>
      
       <td><?php echo $row['state'];?></td>
      </tr>
      
     
      <?php
    }
    }
    ?>
  </tr>
</table>
</div>
<script language="javascript">
                function deleteme(delid) 
                {
                        window.location.href='deleteimage.php?id='+delid+'';
                        return true;
                }
                </script>
</body>
</html>