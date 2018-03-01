<?php


if(isset($_POST["submit"])){
        $cpid= $_POST['cpid'];
        $database = "grocery";
        $db = mysqli_connect('localhost','root','',$database);

        
        
        $count = "SELECT no_of_items from cart where pid=$cpid";
        $row2 = $db->query($count);
        $row1 = mysqli_fetch_assoc($row2);

        $pcount = "SELECT no_of_items from products where ID=$cpid";
        $prow2 = $db->query($pcount);
        $prow1 = mysqli_fetch_assoc($prow2);
        $add= $prow1['no_of_items']+$row1['no_of_items'];

        $sql1 = "update products set no_of_items=$add where ID=$cpid";

        $result = $db->query($sql1);
        //echo $add;
        $result1 = $db->query("delete FROM cart where pid=$cpid");
            header('Location: show_cart.php');
        
        
    ?>
    <form action="costomer_logged.php" method="post" enctype="multipart/form-data">
        <input type="submit" name="submit" value="Go BACK"/>
    </form>
    <?php
}
?>

