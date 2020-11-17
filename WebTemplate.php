<!-- ex from pg 215-217-->
<!DOCTYPE html>
<html>
<head>
	<title>Web Template Project</title>
</head>
<body>
	<?php include("inc_header.html"); ?>
	<div style="width:20%; height: 250px; text-align: center; float: left;">
		<?php include("inc_buttonnav.html") ?>
	</div>

	<!--start of dynamic content section -->
	<?php 
		if(isset($_GET["content"])){
			//we are here bc one of the three buttons was clicked. now lets see which one was clicked.
			switch($_GET["content"]){
				case "About Me":
					include("inc_about.html");
					break;
				case "Contact":
					include("inc_contact.html");
					break;
				case "Home":
				default:
					include("inc_home.html");
					break;

			}
		}

		else{
			//no button has been clicked on
			include("inc_home.html");
		}
	?>

	<!-- end of dynamic content section -->
	<?php include("inc_footer.php") ?>
</body>
</html>