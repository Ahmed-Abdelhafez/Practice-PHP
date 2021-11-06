<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">
	
	
	<?php  

	//Step 1 -Make a variable with some text as value

	$text = "Hello world";

	//Step 2 - Use crypt() function to encrypt it
	//Step 3 - Assign the crypt result to a variable

	$text = password_hash($text, PASSWORD_DEFAULT);

	//Step 4 - echo the variable

	echo $text;
	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>