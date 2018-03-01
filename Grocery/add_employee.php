<?php
if(isset($_POST["submit"])){
       	$value1 = $_POST['e_username'];
        $value2 = $_POST['e_password'];
        $value3 = $_POST['e_phone_no'];
        //echo $value1;
        //echo $value2;
        //echo $value3;
        $database = "grocery";
        $db = mysqli_connect('localhost','root','',$database);
        
        $q = "INSERT INTO employee VALUES('$value1','$value2',$value3,now(),'')";
            $insert = $db->query($q);
        
        header('Location: Admin_logged.php');
        
}
?>

