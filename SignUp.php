<?php 
include("DBConnection.php"); 
$username=$_POST['username']; 
$email=$_POST['email']; 
$password=$_POST['password']; 
$confirmpsw=$_POST['confirmpsw']; 
$insert="insert into signup values('$username','$email','$password','$confirmpsw')"; 
$result=mysqli_query($conn,$insert); 
if($result) 
{ 
echo "inserted"; 
} 
else 
{ 
echo "not inserted"; 
} 
?> 
