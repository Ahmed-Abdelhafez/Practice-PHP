<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

	//Step1: Define a function and make it return a calculation of 2 numbers

	function addNum(){
		$num1 = 10;
		$num2 = 20;
		return $num1 + $num2;
	}
	$result = addNum();
	echo $result . "</br>";
	
	
	//Step 2: Make a function that passes parameters and call it using parameter values

	function addWithParams($num1, $num2){
		return num1 + num2;
	}
	$result = addNum(10, 20);
	echo $result . "</br>";


	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php" ?>