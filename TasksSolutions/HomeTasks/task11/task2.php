<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
	$cars = [["id"=>1,"maker"=>"Toyota","model"=>"Camry 50","price"=>30000],["id"=>2,"maker"=>"Mercedes","model"=>"C 100","price"=>20000],["id"=>3,"maker"=>"Daewoo","model"=>"Nexia","price"=>15000],["id"=>4,"maker"=>"Mercedes","model"=>"S 500","price"=>27000]];
	$basket = null;
	if (isset($_COOKIE["basket"])){
		$basket = json_decode($_COOKIE["basket"]);
	}
	else{
		$basket = [];
	}
/* Enter your code here */
	if(isset($_REQUEST['id'])){
		$basket[] = $_REQUEST['id'];

		$var=json_encode($basket);
		setcookie("basket",$var,time()+(86400 * 30));
		?>
		<a href="task2.php">Back</a>
	<?php
	}else{
	for ($i=0; $i <count($cars); $i++) { 
		?>
			<span><?=$cars[$i]["maker"]." ".$cars[$i]["model"]?>
				<?php
					if (!(in_array($i+1, $basket))) {
						?>
						<a href="http://localhost/task11/task2.php?id=<?=$cars[$i]['id']?>">Add to basket</a>
						<?php
					}else{
						?>
						<span>Already picked</span>
						<?php
					}
				?>

			</span>
			<br>
		<?php
	}
	?>
		<h1>In Basket</h1>
		<span>items with id:</span> 
	<?php
		for ($i=0; $i <count($basket) ; $i++) { 
			echo $basket[$i]." ";
		}
	}
?>
	

</body>
</html>