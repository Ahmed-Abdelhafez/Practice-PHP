<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

	//Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP

	if(1 > 2){
		echo "I hate php" . "</br>";
	} else if( 1 == 2 ){
		echo "I don't like php" . "</br>";
	} else {
		echo "I love php" . "</br>";
	}

	//Step 2: Make a forloop  that displays 10 numbers
	
	for($number = 0; $number < 10; $number++){
		echo $number . "</br>";
	}

	//Step 3 : Make a switch Statement that test againts one condition with 5 cases

	$number = 5;

	switch($number){

		case 1:
		echo "number equal 1";
		break;
		case 2:
		echo "number equal 2";
		break;
		case 3:
		echo "number equal 3";
		break;
		case 4:
		echo "number equal 4";
		break;
		case 5:
		echo "number equal 5";
		break;
	}
	
	

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>