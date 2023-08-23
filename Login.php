<?php 
include("DBConnection.php"); 
session_start(); 
if($_SERVER["REQUEST_METHOD"]=="POST") 
{ 
$username=mysqli_real_escape_string($conn,$_POST['username']); 
$password=mysqli_real_escape_string($conn,$_POST['password']); 
$sql="select username from login where username='$username' and password='$password'"; 
$result=mysqli_query($conn,$sql); 
$count= $result->num_rows; 
if($count==1) 
{ 
$_SESSION['username']= $username; 
if($username=="admin" && $password=="1234") 
{ 
header("location: admin.php"); 
} 
else 
{ 
header("location: userpage.php"); 
}
} 
else 
{ 
echo "Login faild"; 
} 
} 
?>
