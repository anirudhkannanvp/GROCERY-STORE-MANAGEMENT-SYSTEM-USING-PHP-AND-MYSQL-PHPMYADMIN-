<?php
if(isset($_POST["submit"])){
        $cpid= $_POST['cpid'];
        $value= $_POST['Acost'];
        $value2 = $_POST['Ano_of_items'];
        $value3 = $_POST['Acatogery'];
        $value4 = $_POST['AItem_name'];
        
        $database = "grocery";
        $db = mysqli_connect('localhost','root','',$database);
        $result = $db->query("update products set no_of_items=$value2 where ID=$cpid");
        $result2 = $db->query("update products set cost=$value where ID=$cpid");
        $result3 = $db->query("update products set catogery='$value3' where ID=$cpid");
        $result4 = $db->query("update products set Item_name='$value4' where ID=$cpid");
        
        header('Location: Admin_logged.php');
        
}
?>

