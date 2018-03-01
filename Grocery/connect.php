<?php
$inputuser= $_POST['user'];
$inputpass = $_POST['pass'];
$login_type = $_POST['login_type'];

$user="root";
$password="";
$database = "grocery";
$connect=mysqli_connect('localhost',$user,$password,$database);

global $user_id;
if($login_type ==  "Customer"){
$query = "SELECT * FROM customer WHERE user = '$inputuser' " ;
$querypass = "SELECT * FROM customer WHERE password = '$inputpass' " ;

$result = mysqli_query($connect,$query);
$resultpass = mysqli_query($connect,$querypass);

$row = mysqli_fetch_assoc($result);

$rowpass = mysqli_fetch_array($resultpass);

$serveruser = $row["user"];
$serverpass = $row["password"];
$user_id = $row["ID"];
session_start();
$_SESSION['cid12'] = $user_id;
//echo $user_id;
if($serveruser==$inputuser && $serverpass==$inputpass){
	//echo "YES";
	header('Location: index.php');
}
else{
	echo "NO";
	header('Location: index1.html');
}
}

elseif ($login_type == "Admin") {
	if($inputuser=="Admin" && $inputpass=="dbms_pro1"){
	//echo "YES";
	header('Location: Admin_logged.php');
}
else{
	echo "NO";
	header('Location: index1.html');
}
}
elseif ($login_type = "Employee"){
	$equery = "SELECT * FROM employee WHERE e_username = '$inputuser' " ;

$equerypass = "SELECT * FROM employee WHERE e_password = '$inputpass' " ;

$eresult = mysqli_query($connect,$equery);
$eresultpass = mysqli_query($connect,$equerypass);

$erow = mysqli_fetch_assoc($eresult);

$erowpass = mysqli_fetch_array($eresultpass);

$eserveruser = $erow["e_username"];
$eserverpass = $erow["e_password"];
echo $eserveruser;
echo $eserverpass;
if($eserveruser==$inputuser && $eserverpass==$inputpass){
	//echo "YES";
	header('Location: manager_logged.php');
}
else{
	//echo "NO";
	header('Location: index1.html');
}
}


?>