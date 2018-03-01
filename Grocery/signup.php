<?php
$link = mysqli_connect("localhost", "root", "","grocery");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$user = mysqli_real_escape_string($link, $_REQUEST['username']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$password2 = mysqli_real_escape_string($link, $_REQUEST['cpassword']);
$number = mysqli_real_escape_string($link, $_REQUEST['phonenumber']);
// attempt insert query execution
if($password = $password2){
$sql = "INSERT INTO customer VALUES ('',$user', '$password',$number,NOW())";
	if(mysqli_query($link, $sql)){
	    //echo "Records added successfully.";
	}
	header('Location: index.html');
} 
else{
    //echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    header('Location: index1.html');
}
mysqli_close($link);
?>