
<?php 
// Include config file
 include("config.php");
if(isset($_POST['notification'])){
	$sname = $_POST['sname'];
	
	$type = $_POST['type'];
	$ntype = $_POST['ntype'];
	
		$fees = $_POST['fees'];
		$univn = $_POST['univn'];
		$registration = $_POST['registration'];
		
		$feestype = $_POST['feestype'];
		$amount = $_POST['amount'];
		
		$academicstate = $_POST['academicstate'];
        $checkbox1=$_POST['state']; 
	
	$checkbox1 = 	implode('+', $_POST['state']);

	
	
	
	
	
	
		
	    $uploadtime = date("Y-m-d H:i:s");
    	$cname = $_FILES['sfile']['name'];
}
if(!empty($cname))	{	
				$tname = $_FILES['sfile']['tmp_name'];
				$tname = $_FILES['sfile']['tmp_name'];
				$size	= $_FILES['sfile']['size'];
				$name = $_SESSION['firstname'].date("his");
				$fext = pathinfo($cname, PATHINFO_EXTENSION);
				$fire = pathinfo($name,PATHINFO_FILENAME);
				$savename = $fire.".".$fext;
				$finalfile = "image/$savename";
														}
		if(!empty($cname)){
	 if($size < 500000){
				$check = move_uploaded_file($tname,$finalfile);
				if($check){
                                  $qry1 = "INSERT INTO `image`(`name`,`sname`,`imagename`, `type`,`time`,`univn`,`fees`,`registration`,`feestype`,`amount`,`academicstate`,`state`) VALUE  ('$name','$sname','$savename','$ntype','$uploadtime','$univn','$fees','$registration','$feestype','$amount','$academicstate','$checkbox1')";
                               $test =	mysqli_query($con,$qry1);
                               if($test = TRUE){?>
				<script>
				if(confirm("File Uploaded Sucessfully!!!"))
				{	document.location = 'show.php';
				}
				else
				{
					document.location = 'show.php';
				}
				</script>
				<?php
											}
					else {?>
					<script>
					if(confirm("file is not uploaded"))
			
				{	document.location = 'show.php';
				}
				else
				{
					document.location = 'show.php';
				}
				</script>
				<?php
						
				}
			}
	 }
	 else{
		 echo "file size is too large";	
	 }
 }else
 {	
	echo "Please select an file to upload";
 }												
 ?>
