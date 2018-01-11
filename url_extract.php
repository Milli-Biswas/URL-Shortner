<?php  
  
$con=mysqli_connect("localhost:3306","root","","url_shortner") or die("error"); 

//mysqli_select_db("url_shortner", $con); 
  
$de= $_GET["decode"];  
$sql= "UPDATE `store_urls` SET `hits`=hits +1  WHERE shortned_url ='".$de."'";
$result=mysqli_query($con,$sql);
$sql2 = 'select * from store_urls where shortned_url="'.$de.'"'; 
$result=mysqli_query($con,$sql2);  
while($row = mysqli_fetch_array($result))  
{  
$res=$row['inserted_url'];  
header("location:".$res);  
}  
?> 