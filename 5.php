<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


    //Step1: Use a pre-built math function here and echo it
	
	echo pow(3,3) . "<br>";

	//Step 2:  Use a pre-built string function here and echo it

	echo strlen('Hello world') . "<br>";

	//Step 3:  Use a pre-built Array function here and echo it

	$arr = [1, 2, 3, 5];

	echo max($arr) . "<br>";

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>