<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#main{
			display: flex;
			flex-wrap: wrap;
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
		#names{
			display: flex;
			flex-direction: column;
		}
		#names span{
			margin-bottom: 5px;
		}
		#inputs input{
			margin-bottom: 2px;
		}
		#inputs{
			display: flex;
			flex-direction: column;
		}
		#inForm{
			display: flex;
		}
	</style>
</head>
<body>
	<h1>Admin Page</h1>
	<form action="task3.php">
		<div id="inForm">
		<div id="names">
			<span>Maker</span>
			<span>Model</span>
			<span>Year</span>
			<span>Price</span>
			<span>Image(URL)</span>
		</div>
		<div id="inputs">
			<input type="text" name="maker">
			<input type="text" name="model">
			<input type="text" name="year">
			<input type="text" name="price">
			<input type="text" name="url">			
		</div>
		</div>
		<input type="submit" name="but" value="clicked">
	</form>
	<?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = 'root';
         $conn = mysqli_connect($dbhost, $dbuser, "", 'mydb');
         if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }
        if (isset($_REQUEST['but'])) {
        	$maker=$_REQUEST['maker'];
        	$model=$_REQUEST['model'];
        	$year=$_REQUEST['year'];
        	$price=$_REQUEST['price'];
        	$url=$_REQUEST['url'];
        	$sql="INSERT INTO `cars`(`maker`, `model`, `year`, `price`, `url`) VALUES ('$maker','$model','$year','$price','$url')";
        	
        	$result = mysqli_query($conn,$sql);
        }
        if (isset($_REQUEST['selected'])) {
        	$req=$_REQUEST['selected'];
        	$sql = "DELETE FROM cars where id='$req'";
        	$result = mysqli_query($conn,$sql);
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
					<a href="task3.php?selected=<?=$row['id'];?>">delete</a>
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