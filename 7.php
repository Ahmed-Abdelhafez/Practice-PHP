<?php include "functions.php" ?>

<?php 

$user = 'root';
$password = 'root';
$db = 'company';
$host = 'localhost';
$port = 3307;

$link = mysqli_init();
$success = mysqli_connect(
   $host, 
   $user, 
   $password, 
   $db,
   $port
);

	if(!$success){
		die('connection faild : ' . mysqli_connect_error() );
	}

	$query = "SELECT * FROM users";
	$result = mysqli_query($success, $query);

	if(!$result){
		die("query failed");
	}


?>

<?php include "includes/header.php" ?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

	*/
	while($user = mysqli_fetch_assoc($result)){
		echo 'username: ' . $user['username'] . '<br>';
		echo 'pasword: ' . $user['password'] . '<br>';
	}
	
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
