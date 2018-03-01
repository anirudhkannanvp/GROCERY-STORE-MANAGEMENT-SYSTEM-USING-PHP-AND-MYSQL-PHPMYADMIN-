<html>
<head>
	<style>
	body{
		background-repeat: no-repeat;
		background-size: cover;
	}
</style>
</head>
<body background="b1.jpg" >

<?php
if(isset($_POST["submit"])){
        $database = "grocery";
        $db = mysqli_connect('localhost','root','',$database);
        
        $result3 = $db->query("SELECT * FROM PRODUCTS order by cost");
        //header('Location: Admin_logged.php');
}
?>
<table cellpadding="5" cellspacing="5">
      	<?php
      echo "<tr>";
      echo "<th>"; echo "ID"; echo "</th>";
      echo "<th>"; echo "Category"; echo "</th>";
      echo "<th>"; echo "Item Name"; echo "</th>";
      echo "<th>"; echo "Cost"; echo "</th>";
      echo "<th>"; echo "No of items left"; echo "</th>";
      echo "</tr>";
 while ($row = mysqli_fetch_array ($result3)) {
      echo "<tr>";
      echo "<td>"; echo $row["ID"]; echo "</td>";
      echo "<td>"; echo $row["catogery"]; echo "</td>";
      echo "<td>"; echo $row["Item_name"]; echo "</td>";
      echo "<td>"; echo $row["cost"]; echo "</td>";
      echo "<td>"; echo $row["no_of_items"]; echo "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>";
      echo "</td>";
      echo "<td>";
      echo "</td>";
      echo "<td colspan='2'>";
      ?>
      <?php echo "</td>";
      echo "</tr>";


  }
?>
</body>
</html>
