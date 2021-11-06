<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<?php 

session_start();

$_SESSION["message"] = "This is session";

$expire = time() + (60*60*24*7);
setcookie("One_week_cookie", "Just week", $expire);

?>


	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
	<a href="9.php?id='10'">Click Here</a>
	<?php 

	//Create a link saying Click Here, and set the link href to pass some parameters and use the GET super global to see it
	if(isset($_GET["id"])){
		echo $_GET["id"] . "<br>"; 
	}
	
	//Step 2 - Set a cookie that expires in one week

	if(isset($_COOKIE["One_week_cookie"])){
		echo $_COOKIE["One_week_cookie"] . "<br>";
	}

	//Step 3 - Start a session and set it to value, any value you want.
	
	if(isset($_SESSION["message"])){
		echo $_SESSION["message"];
	}

	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>