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

	<?php  	
    session_start();
	
	$dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = 'root';
    $conn = mysqli_connect($dbhost, $dbuser, "", 'mydb');
    
	
    
    if (isset($_REQUEST['selected'])) {
        	$req=$_REQUEST['selected'];
        	$sql = "DELETE FROM cars where id='$req'";
        	$result = mysqli_query($conn,$sql);
        }
    $sql= "select * from cars";
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
					<?php
					if ($_SESSION['admin']==1) {
						?>
						<a href="task3B.php?selected=<?=$row['id'];?>">delete</a>
						<?php						
					}
					?>
					
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