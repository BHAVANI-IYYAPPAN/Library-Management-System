<?php 
include("DBConnection.php"); 
$sql="select * from books"; 
$result=mysqli_query($conn,$sql); 
echo "<center><table id='book'>";
echo"<th>ISBN</th>"."<th>Book Title</th>"."<th>Author</th>"."<th>Book Type</th>"."<th>Price</th>"; 
$count= $result->num_rows; 
if($count>0) 
{ 
while($row=$result->fetch_assoc()) 
{ 
echo"<tr><td>".$row["ISBN"]."</td><td>".$row["BookTitle"]."</td><td>".$row["Author"]."</td><td>".$row["BookType"]."</td><td>".$row["Price"]."</td></tr>"; 
} 
echo"</table></center>"; 
} 
?>
<?php 
include("DBConnection.php"); 
if (isset($_POST['search'])) 
{ 
$search=$_POST['searchbook']; 
$sql="select * from books where BookTitle like '%$search%'"; 
$result=mysqli_query($conn,$sql); 
$count= $result->num_rows; 
echo "<center><table id='searchbook'>"; 
echo"<th>ISBN</th>"."<th>Book Title</th>"."<th>Author</th>"."<th>Book Type</th>"."<th>Price</th>"; 
if($count>0) 
{
while($row=$result->fetch_assoc()) 
{ 
echo"<tr><td>".$row["ISBN"]."</td><td>".$row["BookTitle"]."</td><td>".$row["Author"]."</td><td>".$row["BookType"]."</td><td>".$row["Price"]."</td></tr>"; 
//echo ; 
} 
echo"</table></center>"; 
} 
} 
?>
