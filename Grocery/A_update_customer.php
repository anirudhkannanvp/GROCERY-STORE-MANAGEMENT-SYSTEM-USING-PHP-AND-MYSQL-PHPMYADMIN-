<?php
if(isset($_POST["submit"])){
        $cpid= $_POST['Acid'];
       
        $value2 = $_POST['Cpassword'];
        $value3 = $_POST['C_phone_number'];
        
        $database = "grocery";
        $db = mysqli_connect('localhost','root','',$database);
        
        $result2 = $db->query("update customer set phone_no='$value3' where ID=$cpid");
        $result3 = $db->query("update customer set password='$value2' where ID=$cpid");
        
        header('Location: Admin_logged.php');
        
}
?>

