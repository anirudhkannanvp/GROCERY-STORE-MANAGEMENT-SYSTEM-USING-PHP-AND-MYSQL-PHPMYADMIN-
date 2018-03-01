<!DOCTYPE html>
<html>
<head>
<title>Grocery Store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Products :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
      function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
   jQuery(document).ready(function($) {
      $(".scroll").click(function(event){    
         event.preventDefault();
         $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
      });
   });
</script>
<!-- start-smoth-scrolling -->
</head>
   
<body>
<!-- header -->
   <div class="agileits_header">
      
      
      <div class="product_list_header">  
         <form action="#" method="post" class="last">
                <fieldset>
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <input type="submit" name="submit" value="View your cart" class="button" />
                </fieldset>
            </form>
      </div>
      <div class="w3l_header_right">
         <ul>
            <li class="dropdown profile_details_drop">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
               <div class="mega-dropdown-menu">
                  <div class="w3ls_vegetables">
                     <ul class="dropdown-menu drp-mnu">
                        <li><a href="login.html">Login</a></li> 
                        <li><a href="login.html">Sign Up</a></li>
                     </ul>
                  </div>                  
               </div>   
            </li>
         </ul>
      </div>
      
      <div class="clearfix"> </div>
   </div>
<!-- script-for sticky-nav -->
   <script>
   $(document).ready(function() {
       var navoffeset=$(".agileits_header").offset().top;
       $(window).scroll(function(){
         var scrollpos=$(window).scrollTop(); 
         if(scrollpos >=navoffeset){
            $(".agileits_header").addClass("fixed");
         }else{
            $(".agileits_header").removeClass("fixed");
         }
       });
       
   });
   </script>
<!-- //script-for sticky-nav -->
   <div class="logo_products">
      <div class="container">
         <div class="w3ls_logo_products_left">
            <h1><a href="index.php"><span>Grocery</span> Store</a></h1>
         </div>
         
         
         <div class="clearfix"> </div>
      </div>
   </div>
<!-- //header -->
<!-- products-breadcrumb -->
   <div class="products-breadcrumb">
      <div class="container">
         <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>|</span></li>
            <li>Transaction History</li>
         </ul>
      </div>
   </div>
   <?php
   
   $db="grocery";
   $connect = mysqli_connect('localhost','root','',$db);
   $query = mysqli_query($connect,"SELECT * FROM purchase ");

   $Cart_total=0;
      echo "<center>";
      ?><table cellpadding="45" cellspacing="45">
         <?php
      echo "<tr>";
      
      echo "<th>"; echo "Product ID"; echo "&nbsp"; echo "&nbsp"; echo "</th>";
      echo "<th>"; echo "No of items"; echo "&nbsp"; echo "&nbsp";echo "</th>";
      echo "<th>"; echo "Cost of items"; echo "&nbsp"; echo "&nbsp"; echo "</th>";
      echo "<th>"; echo "&nbsp"; echo "&nbsp";echo "&nbsp"; echo "&nbsp";echo "&nbsp"; echo "&nbsp"; echo "Date of purchase"; echo "&nbsp"; echo "&nbsp"; echo "</th>";
      echo "</tr>";
 while ($row = mysqli_fetch_array ($query)) {
      echo "<tr>";
      echo "<td>"; echo "&nbsp"; echo "&nbsp";echo "&nbsp"; echo "&nbsp";echo $row["ppid"]; echo "&nbsp"; echo "&nbsp";echo "</td>";
      echo "<td>"; echo "&nbsp"; echo "&nbsp";echo "&nbsp"; echo "&nbsp";echo $row["no_of_items"];echo "&nbsp"; echo "&nbsp"; echo "</td>";
      echo "<td>"; echo "&nbsp"; echo "&nbsp";echo "&nbsp"; echo "&nbsp";echo $row["cost_of_items"];echo "&nbsp"; echo "&nbsp"; echo "</td>";
      echo "<td>"; echo "&nbsp"; echo "&nbsp";echo "&nbsp"; echo "&nbsp";echo $row["date_time"];echo "&nbsp"; echo "&nbsp"; echo "</td>";
      echo "</tr>";
  }
  echo "<tr>";
  
  echo "</table>";
  echo "</center>";

?>
<!-- //products-breadcrumb -->
<!-- banner -->
</body>
</html>