<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#main{
			display: flex;
		}
		#car{
			display: flex;
			border: 1px solid red;
			border-radius: 4px;
			width: 300px;
			margin-right: 15px;
			height: 100px;
		}
		#card{
			display: flex;
			flex-direction: column;
		}
		img{
			width: 100px;
			height: 100px;
		}
		#card h3{
			height: 10px;
		}
		#image{
			margin-right: 7px;
		}
	</style>
</head>
<body>
	
	<?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = 'root';
         $conn = mysqli_connect($dbhost, $dbuser, "", 'mydb');
         if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }
		$sql = "SELECT * FROM cars";
		$result = mysqli_query($conn,$sql);
		$num = mysqli_num_rows($result);
		?>
		<div id="main">
		<?php
		for ($i=0;$i<$num;$i++){
			$row = mysqli_fetch_assoc($result);
		?>
			<div id="car">
				<div id="image">
				<img src="<?=$row["url"]?>">
				</div>
				<div id="card">
					<h3><?=$row["maker"]." ".$row["model"]?></h3>
					<span><?=$row["price"]?></span>
					<span><?=$row["year"]?></span>
				</div>

			</div>
			
			<?php  
		}
		?>
		</div>

		<?php		            
	         mysqli_close($conn);      
?>
</body>
</html>