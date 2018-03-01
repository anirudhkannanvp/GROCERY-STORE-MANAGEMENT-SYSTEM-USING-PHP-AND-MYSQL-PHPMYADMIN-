<?php


if(isset($_POST["submit"])){
        $cpid= $_POST['cpid'];
        $database = "grocery";
        $db = mysqli_connect('localhost','root','',$database);
        echo $cpid;
        $result1 = $db->query("delete FROM PRODUCTS where ID=$cpid");
           // header('Location: Admin_logged.php');
}
?>

