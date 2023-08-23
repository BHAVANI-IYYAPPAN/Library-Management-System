<?php 
include("DBConnection.php"); 
$isbn=$_POST['isbn']; 
$title=$_POST['title']; 
$author=$_POST['author']; 
$type=$_POST['type']; 
$price=$_POST['price']; 
$insert="insert into books values('$isbn','$title','$author','$type','$price')";
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
