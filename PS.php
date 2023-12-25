<?php
$name=$_REQUEST['name'];

$email=$_REQUEST['email'];

$review=$_REQUEST['review'];

if(isset($POST['submit']))
{
$host="localhost";
$user="root";
$password="";
$db="SPR";

$connect =mysqli_connect ($host,$user,$password,$db);

$insert="insert into SPRC values('$name','$email','$review')";

mysqli_query($connect,$insert);

if($conn){
	echo("<h1 style='color:green;'>your review is submited></h1>")

}
else{
	echo("<h1 style='color:red;'>your review is not submited</h1>")
}



}

