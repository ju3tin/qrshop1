

<?php
         $dbhost = 'sl-eu-gb-p01.dblayer.com:15675';
         $dbuser = 'admin';
         $dbpass = 'KFJQDYRGLTIBQEEP';
		 $db = 'compose';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
   
         if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }
		 
         echo 'Connected successfully';
         mysqli_close($conn);
      ?>
	  
	  <?php 
 $mysqli = new mysqli("sl-eu-gb-p01.dblayer.com:15675", "admin", "KFJQDYRGLTIBQEEP", "compose"); 
  
if ($mysqli === false) { 
    die("ERROR: Could not connect. ".$mysqli->connect_error); 
} 
  
$sql = "INSERT INTO staff (activated, name, email) 
              VALUES('ram', 'singh', '25') "; 
    if ($mysqli->query($sql) === true) 
{ 
    echo "Records inserted successfully."; 
} 
else
{ 
    echo "ERROR: Could not able to execute $sql. "
           .$mysqli->error; 
} 
  
// Close connection 
$mysqli->close(); 
?> 