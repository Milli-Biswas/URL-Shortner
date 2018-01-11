<?php
$con=mysqli_connect("localhost:3306","root","","url_shortner") or die("error");

$inputed_url=$_POST['geturl'];   
if (filter_var($inputed_url, FILTER_VALIDATE_URL)) {

$sql = 'select * from store_urls where 	inserted_url="'.$inputed_url.'"';  
$result=mysqli_query($con,$sql); 
	
$rowcount=mysqli_num_rows($result);
	if($rowcount == 0)
	{
		$random=rand(10000,99999);  
		$generatedkey=base_convert($random,20,36);  
		$sql="INSERT INTO `store_urls`(`key`, `inserted_url`, `shortned_url`, `hits`) VALUES ('".$random."','".$inputed_url."','".$generatedkey."',0)";
		mysqli_query($con,$sql); 
		echo "Shortened url localhost:81/URL_Shotner_2/". $generatedkey ."";  
		mysqli_close($con);
	}
	else
	{	
		$result=mysqli_fetch_assoc($result);
		echo "Shortened url localhost:81/URL_Shotner_2/". $result['shortned_url'] .""; 
	}	
	
}
else
{
 echo("$inputed_url is not a valid URL");
}
?>
