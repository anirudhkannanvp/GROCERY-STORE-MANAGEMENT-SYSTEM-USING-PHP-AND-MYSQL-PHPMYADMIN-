<?php


if(isset($_POST["submit"])){
        $cpid= $_POST['cpid'];
        $database = "grocery";
        $db = mysqli_connect('localhost','root','',$database);

        $result = $db->query("update cart set no_of_items=no_of_items-1 where pid=$cpid");
        $result = $db->query("update products set no_of_items=no_of_items+1 where ID=$cpid");
        $count = $db->query("select count(1) FROM cart where no_of_items<1 and pid=$cpid");
        $row = mysqli_fetch_array($count);

        $total = $row[0];
        //echo $total;
        if($total > 0 ){
            $q = "delete FROM cart where pid=$cpid";
            $insert = $db->query($q);
        }
            header('Location: show_cart.php');
        
        
    ?>
    <form action="costomer_logged.php" method="post" enctype="multipart/form-data">
        <input type="submit" name="submit" value="Go BACK"/>
    </form>
    <?php
}
?>

