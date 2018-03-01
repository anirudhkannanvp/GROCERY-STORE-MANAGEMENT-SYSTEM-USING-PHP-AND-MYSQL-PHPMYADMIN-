<html>
<body>
   <?php
   $db="grocery";
   $connect = mysqli_connect('localhost','root','',$db);
   $query = mysqli_query($connect,"SELECT * FROM products");
   

      
      echo "<table>";
      
 while ($row = mysqli_fetch_array ($query)) {
      echo "<tr>";
      echo "<td>"; echo $row["ID"]; echo "</td>";
      echo "<td>"; echo $row["catogery"]; echo "</td>";
      echo "<td>"; echo $row["Item_name"]; echo "</td>";
      echo "<td>"; echo $row["cost"]; echo "</td>";
      echo "<td>"; echo $row["no_of_items"]; echo "</td>";
      echo "<td>"; ?><form action="add_to_cart.php" method="post" enctype="multipart/form-data">
        <input type="submit" name="submit" value="ADD"/>
    </form>
      <?php echo "</td>";
      
      echo "</tr>";


   
}
?>
<form action="show_cart.php" method="post" enctype="multipart/form-data">
        <input type="submit" name="submit" value="CART"/>
    </form>

</body>
</html>










