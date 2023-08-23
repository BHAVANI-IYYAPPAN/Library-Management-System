<?php 
include("DBConnection.php"); 
echo "<form method='POST'>"; 
echo "<input type='search' placeholder='Enter Book ISBN' name='isbn'>"; 
echo "<input type='submit' value='Delete' name='delete'>"; 
if(isset($_POST['delete']))
{ 
$isbn=$_POST['isbn']; 
$del="delete from books where ISBN= '$isbn'"; 
if(mysqli_query($conn,$del)) 
{ 
echo "<br>"."Deleted Succssfully"; 
} 
else 
{ 
echo "<br>"." Failed ".$isbn; 
} 
} 
echo "</form>"; 
?>
