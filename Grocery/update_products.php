<?php


if(isset($_POST["submit"])){
        $cpid= $_POST['cpid'];
        $value= $_POST['current_no_of_items'];
        $value2 = $_POST['cost_of_item'];
        $database = "grocery";
        $db = mysqli_connect('localhost','root','',$database);
        $result = $db->query("update products set no_of_items=$value where ID=$cpid");
        $result2 = $db->query("update products set cost=$value2 where ID=$cpid");
            header('Location: manager_logged.php');
        
        
    
}
?>

