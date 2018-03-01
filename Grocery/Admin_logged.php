<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
<title>Grocery Store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
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
                
            </form>
		</div>
		<div class="w3l_header_right">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							
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
				<h1><a href="index.html"><span>Grocery</span> Store</a></h1>
			</div>
			
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<li><a href="#products_edit">Products Database</a></li>
						<li><a href="#customer">Customer</a></li>
						<li><a href="#add_employee">Employee</a></li>
						<li><a href="#All_transactions">All Transactions</a></li>
						<li><a href="#search_products">Search for Products Based on Specifications</a></li>
						<li><a href="#search_products_itname">Search for Products Based on Item Name</a></li>
						<li><a href="#search_products_range">Search for Products Based on Item Price Range</a></li>
						<li><a href="#search_products_itsort">Sort Products based on price</a></li>
						
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3l_banner_nav_right_banner">
								<h3>Make your <span>food</span> with Spicy.</h3>
								<div class="more">
									<a href="#" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
								</div>
							</div>
						</li>
						<li>
							<div class="w3l_banner_nav_right_banner1">
								<h3>Make your <span>food</span> with Spicy.</h3>
								<div class="more">
									<a href="#" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
								</div>
							</div>
						</li>
						<li>
							<div class="w3l_banner_nav_right_banner2">
								<h3>upto <i>50%</i> off.</h3>
								<div class="more">
									<a href="#" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<!-- flexSlider -->
				<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- banner -->
	<div class="banner_bottom">
			<div class="wthree_banner_bottom_left_grid_sub">
			</div>
			<div class="wthree_banner_bottom_left_grid_sub1">
				<div class="col-md-4 wthree_banner_bottom_left">
					<div class="wthree_banner_bottom_left_grid">
						<img src="images/4.jpg" alt=" " class="img-responsive" />
						<div class="wthree_banner_bottom_left_grid_pos">
							<h4>Discount Offer <span>25%</span></h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 wthree_banner_bottom_left">
					<div class="wthree_banner_bottom_left_grid">
						<img src="images/5.jpg" alt=" " class="img-responsive" />
						<div class="wthree_banner_btm_pos">
							<h3>introducing <span>best store</span> for <i>groceries</i></h3>
						</div>
					</div>
				</div>
				<div class="col-md-4 wthree_banner_bottom_left">
					<div class="wthree_banner_bottom_left_grid">
						<img src="images/6.jpg" alt=" " class="img-responsive" />
						<div class="wthree_banner_btm_pos1">
							<h3>Save <span>Upto</span> $10</h3>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
	</div>
<!-- top-brands -->
	
<!-- //top-brands -->
<!-- fresh-vegetables -->
<center><h1> PRODUCTS</h1></center>
	<div id="products_edit">
		<?php
   $db="grocery";
   $connect = mysqli_connect('localhost','root','',$db);
   $query = mysqli_query($connect,"SELECT * FROM products");
   
   
      echo "<center>";
      ?><table cellpadding="5" cellspacing="5">
      	<?php
      echo "<tr>";
      echo "<th>"; echo "Product ID"; echo "</th>";
      echo "<th>"; echo "catogery"; echo "</th>";
      echo "<th>"; echo "Item_name"; echo "</th>";
      echo "<th>"; echo "cost of each item"; echo "</th>";
      echo "<th>"; echo "no_of_items"; echo "</th>";
      
      
      echo "</td>";
      echo "</tr>";
 while ($row = mysqli_fetch_array ($query)) {
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
      echo "<td colspan='3'>";
      ?><form action="A_update_products.php" method="post">
 		
 		<input type="text" placeholder="<?php echo $row["catogery"];?>" value="<?php echo $row["catogery"];?>" name="Acatogery"/>
 		<input type="text" placeholder="<?php echo $row["Item_name"];?>" value="<?php echo $row["Item_name"];?>" name="AItem_name"/>
 		<input type="number" placeholder="<?php echo $row["cost"];?>" value="<?php echo $row["cost"];?>" name="Acost"/>
 		<input type="number" placeholder="<?php echo $row["no_of_items"];?>" value="<?php echo $row["no_of_items"];?>" name="Ano_of_items"/>
		<input type="hidden" name="cpid" value='<?php echo $row["ID"];?>'/>
      	<input type="submit" name="submit" value="Update"/>
    </form>
      <?php echo "</td>";
      echo "</tr>";
  }

  echo "</table>";
  echo "</center>";
?>
	</div>

<br><br><br><center><h1>Customer List</h1></center>
<div id="customer">
		<?php
   $db="grocery";
   $connect = mysqli_connect('localhost','root','',$db);
   $query = mysqli_query($connect,"SELECT * FROM customer");
   
   
      echo "<center>";
      ?><table cellpadding="5" cellspacing="5">
      	<?php
      echo "<tr>";
      echo "<th>"; echo "ID"; echo "</th>";
      echo "<th>"; echo "Username"; echo "</th>";
      echo "<th>"; echo "Password"; echo "</th>";
      echo "<th>"; echo "Phone number"; echo "</th>";
      echo "<th>"; echo "Date of join"; echo "</th>";
      echo "</tr>";
 while ($row = mysqli_fetch_array ($query)) {
      echo "<tr>";
      echo "<td>"; echo $row["ID"]; echo "</td>";
      echo "<td>"; echo $row["user"]; echo "</td>";
      echo "<td>"; echo $row["password"]; echo "</td>";
      echo "<td>"; echo $row["phone_no"]; echo "</td>";
      echo "<td>"; echo $row["Time_of_join"]; echo "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>";
      echo "</td>";
      echo "<td>";
      echo "</td>";
      echo "<td colspan='2'>";
      ?><form action="A_update_customer.php" method="post">
 		
 		<input type="text" placeholder="<?php echo $row["password"];?>" value="<?php echo $row["password"];?>" name="Cpassword"/>
 		<input type="number" placeholder="<?php echo $row["phone_no"];?>" value="<?php echo $row["phone_no"];?>" name="C_phone_number"/>
		<input type="hidden" name="Acid" value='<?php echo $row["ID"];?>'/>
      	<input type="submit" name="submit" value="Update"/>
    </form>
      <?php echo "</td>";
      echo "</tr>";


  }

  
  echo "</table>";
  echo "</center>";
?>
	</div>
<br><br><br><center><h1>Employee List</h1></center>
		<div id="add_employee">
		<?php
   $db="grocery";
   $connect = mysqli_connect('localhost','root','',$db);
   $query = mysqli_query($connect,"SELECT * FROM employee");
   
   
      echo "<center>";
      ?><table cellpadding="5" cellspacing="5">
      	<?php
      echo "<tr>";
      echo "<th>"; echo "ID"; echo "</th>";
      echo "<th>"; echo "Username"; echo "</th>";
      echo "<th>"; echo "Password"; echo "</th>";
      echo "<th>"; echo "Phone number"; echo "</th>";
      echo "<th>"; echo "Date of join"; echo "</th>";
      echo "</tr>";
 while ($row = mysqli_fetch_array ($query)) {
      echo "<tr>";
      echo "<td>"; echo $row["eid"]; echo "</td>";
      echo "<td>"; echo $row["e_username"]; echo "</td>";
      echo "<td>"; echo $row["e_password"]; echo "</td>";
      echo "<td>"; echo $row["e_phone_no"]; echo "</td>";
      echo "<td>"; echo $row["e_date_join"]; echo "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>";
      echo "</td>";
      echo "<td>";
      echo "</td>";
      echo "<td colspan='2'>";
      ?><form action="A_update_emp.php" method="post">
 		<input type="text" placeholder="<?php echo $row["e_password"];?>" value="<?php echo $row["e_password"];?>" name="Apassword"/>
 		<input type="number" placeholder="<?php echo $row["e_phone_no"];?>" value="<?php echo $row["e_phone_no"];?>" name="A_phno"/>
		<input type="hidden" name="Aeid" value='<?php echo $row["eid"];?>'/>
      	<input type="submit" name="submit" value="Update"/>
    </form>
      <?php echo "</td>";
      echo "</tr>";


  }

  echo "<tr>";
      echo "<td colspan='4'>";
      ?><form action="add_employee.php" method="post">
 		
 		<input type="text" placeholder="Username" name="e_username"/>
 		<input type="text" placeholder="Password" name="e_password"/>
 		<input type="number" placeholder="Phone Number" name="e_phone_no"/>
      	<input type="submit" name="submit" value="Add Employee"/>
    </form>
      <?php echo "</td>";
      
      echo "</tr>";
  echo "</table>";
  echo "</center>";
?>
	</div>
<br><br><br><center><h1>All transactions</h1></center>

	<div id="All_transactions">
		<?php
   $db="grocery";
   $connect = mysqli_connect('localhost','root','',$db);
   $query = mysqli_query($connect,"SELECT * FROM purchase");
   
   $Cart_total=0;
      echo "<center>";
      ?><table cellpadding="5" cellspacing="5">
         <?php
      echo "<tr>";
      echo "<th>"; echo "Customer ID"; echo "</th>";
      echo "<th>"; echo "Product ID"; echo "</th>";
      echo "<th>"; echo "No of items"; echo "</th>";
      echo "<th>"; echo "cost of items"; echo "</th>";
      echo "<th>"; echo "Date of purchase"; echo "</th>";
      echo "</tr>";
 while ($row = mysqli_fetch_array ($query)) {
      echo "<tr>";
      echo "<td>"; echo $row["pcid"]; echo "</td>";
      echo "<td>"; echo $row["ppid"]; echo "</td>";
      echo "<td>"; echo $row["no_of_items"]; echo "</td>";
      echo "<td>"; echo $row["cost_of_items"]; echo "</td>";
      echo "<td>"; echo $row["date_time"]; echo "</td>";
      echo "</tr>";
  }
  echo "<tr>";
  
  echo "</table>";
  echo "</center>";

?>
	</div>
<br><br><br><center><h1>SEARCH</h1></center>
<div id="search_products">
		<?php
   $db="grocery";
   $connect = mysqli_connect('localhost','root','',$db);
   $query = mysqli_query($connect,"SELECT * FROM products");
   
   
      echo "<center>";
      ?><table cellpadding="5" cellspacing="5">
      	<?php
      ?><form action="search_products.php" method="post">
 		<input type="number"   name="spid"/>
 		<input type="text"   name="scategory"/>
		<input type="text"   name="sitem_name"/>
		<input type="number"   name="scost"/>
      	c<input type="submit" name="submit" value="Search For products"/>
    </form>
      <?php echo "</td>";
      echo "</tr>";

  echo "<tr>";
      echo "<td colspan='4'>";
      ?>
      <?php echo "</td>";
      
      echo "</tr>";
  echo "</table>";
  echo "</center>";
?>
	</div>

<div id="search_products_itname">
		<?php
   $db="grocery";
   $connect = mysqli_connect('localhost','root','',$db);
   $query = mysqli_query($connect,"SELECT * FROM products");
   
   
      echo "<center>";
      ?><table cellpadding="5" cellspacing="5">
      	<?php
      ?><form action="search_products_itname.php" method="post">
		<input type="text"   name="sitem_name"/>
      	<input type="submit" name="submit" value="Search For products Based on Item name"/>
    </form>
      <?php echo "</td>";
      echo "</tr>";

  echo "<tr>";
      echo "<td colspan='4'>";
      ?>
      <?php echo "</td>";
      
      echo "</tr>";
  echo "</table>";
  echo "</center>";
?>
	</div>

<div id="search_products_range">
		<?php
  $db="grocery";
   $connect = mysqli_connect('localhost','root','',$db);
   $query = mysqli_query($connect,"SELECT * FROM products");
   
   
      echo "<center>";
      ?><table cellpadding="5" cellspacing="5">
      	<?php
      ?><form action="search_products_range.php" method="post">
		<input type="number"   name="sitem_price_st"/>
		<input type="number"   name="sitem_price_end"/>
      	<input type="submit" name="submit" value="Search For products Based on Item Price Range"/>
    </form>
      <?php echo "</td>";
      echo "</tr>";

  echo "<tr>";
      echo "<td colspan='4'>";
      ?>
      <?php echo "</td>";
      
      echo "</tr>";
  echo "</table>";
  echo "</center>";
?>
	</div>


	<div id="search_products_itsort">
		<?php
  $db="grocery";
   $connect = mysqli_connect('localhost','root','',$db);
   $query = mysqli_query($connect,"SELECT * FROM products");
   
   
      echo "<center>";
      ?><table cellpadding="5" cellspacing="5">
      	<?php
      ?><form action="search_products_itsort.php" method="post">
      	<input type="submit" name="submit" value="Sort products Based on Item Price"/>
    </form>
      <?php echo "</td>";
      echo "</tr>";

  echo "<tr>";
      echo "<td colspan='4'>";
      ?>
      <?php echo "</td>";
      
      echo "</tr>";
  echo "</table>";
  echo "</center>";
?>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

</body>
</html>
