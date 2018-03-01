<?php
   session_start();
   $db="grocery";
   $connect = mysqli_connect('localhost','root','',$db);
   $query = mysqli_query($connect,"SELECT * FROM cart");
   /*
 while ($row = mysqli_fetch_array ($query)) {
      
      $ppid = $row["pid"]; 
      $pno_of_items = $row["no_of_items"];  
      $total = $row["no_of_items"]*$row["cost_of_item"]; 
      $today1 = date("Y-m-d H:i:s");

      $var1=$_SESSION['cid12'];
      $_SESSION['cid12'] = null;
      //echo $var1;
      $q = mysqli_query($connect,"INSERT INTO purchase VALUES($var1,$ppid,$pno_of_items,$total,NOW())");
                                           
  }*/
  $qc = mysqli_query($connect,"DELETE from cart where pid>0");
header('Location: index.php');
?>
