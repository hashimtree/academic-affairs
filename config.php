<?php 
   /* database configuaration */
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'u843253920_Hajirrrr1');
   define('DB_PASSWORD', 'Hajirrrr1');
   define('DB_DATABASE', 'u843253920_hajir');
   $con  = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   // Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_errno();
	  exit();
	}
?>