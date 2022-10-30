
<?php 
$user = "root";  
$password = "";  
$host = "localhost";  
$dbase = "newslettersdb";  
$table = "news";  
 

$pass= $_POST['pass']; 
$email= $_POST['email']; 
  
// Connection to DBase  
$dbc= mysqli_connect($host,$user,$password, $dbase)  
or die("Unable to select database"); 
 
 
$query= "INSERT INTO $table  ". "VALUES ('$email', '$pass')"; 
 
mysqli_query ($dbc, $query) 
or die ("Error querying database"); 
 
echo 'You have been successfully added.' . '<br>'; 
 
mysqli_close($dbc); 
 
?> 
 
