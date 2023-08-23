<!DOCTYPE html> 
<html lang="en"> 
<head> 
<title>Admin Page</title> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<style> 
#book { 
font-family: Arial, Helvetica, sans-serif; 
border-collapse: collapse; 
width: 100%; 
} 
#book td, #book th { 
border: 1px solid #ddd; 
padding: 8px; 
} 
#book tr:nth-child(even){background-color: #f2f2f2;} 
#book tr:hover {background-color: #ddd;}
#book th { 
padding-top: 12px; 
padding-bottom: 12px; 
text-align: left; 
background-color: #04AA6D; 
color: white; 
} 
</style> 
</head> 
<body> 
<nav class="navbar navbar-inverse"> 
<div class="container-fluid"> 
<div class="navbar-header"> 
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
<span class="icon-bar"></span> 
<span class="icon-bar"></span> 
<span class="icon-bar"></span> 
</button> 
<a class="navbar-brand" href="#">Book Store</a> 
</div> 
<div class="collapse navbar-collapse" id="myNavbar"> 
<ul class="nav navbar-nav"> 
<li class="active"><a href="#">Home</a></li> 
<li class="dropdown"> 
<a class="dropdown-toggle" data-toggle="dropdown" href="#">Book <span class="caret"></span></a> 
<ul class="dropdown-menu"> 
<li><a href="insert.html">Insert Book</a></li> 
<li><a href="delete.php">Delete Book</a></li> 
</ul> 
</li> 
</ul> 
<ul class="nav navbar-nav navbar-right"> 
<li><a href=""><span class="glyphicon glyphicon-user"></span> Admin</a></li> 
<li><a href="homepage.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li> 
</ul> 
</div> 
</div>
</nav> 
</body> 
</html> 
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
