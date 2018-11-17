


<?php
	
$var = [["maker"=>"Toyota","model"=>"Corolla","year"=>"2015","engine"=>"petroleum","price"=>"30000","additional"=>["tax payed",
"","doesn't reqiure investment"]]
,["maker"=>"BMW","model"=>"X5","year"=>"2012","engine"=>"gas","price"=>"25000","additional"=>["tax payed","technical check passed",""]],

["maker"=>"Toyota","model"=>"Camry","year"=>"2008","engine"=>"diesel","price"=>"35000","additional"=>["","technical check passed","doesn't reqiure investment"]]];
	
	$cars = ["Toyota Corolla (2015)","BMW X5 (2012)", "Toyota Camry (2008)"];
	$additional=["tax payed","technical check passed","doesn't reqiure investment"];

	if (isset($_REQUEST['selectedcar'])) {

		$car=$_REQUEST['selectedcar'];
		$index = array_search($car, $cars);
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table{
			border-collapse: collapse;
		}
		#checkboxes{
			display: flex;
			flex-direction: column;
		}
		input[type='text']{
			border-radius: 3px;
			width: 180px;
			padding: 3px;
		}
		select{
			width: 200px;
			padding: 3px;
			background-color: whitesmoke;
			border-radius: 3px;
		}
	</style>
	
</head>
<body>
	<form action="task3.php">
		<select name="selectedcar" id="selected" onchange="this.form.submit();">
				<option value="">Select</option>
				<?php
				for ($i=0; $i < sizeof($cars) ; $i++) { 
					?>
					<option value="<?= $cars[$i]?>"<?php if (isset($_REQUEST['selectedcar']) && $_REQUEST['selectedcar']==$cars[$i]){
						echo "selected";
					} ?> >
					
					<?=$cars[$i]?>	


					</option>
				<?php
				}

				?>

		</select>		


		<table border="1px">
			<tr>
				<td>Maker:</td>
				<td>
					<select name="maker">
						<?php
						for ($i=0; $i <sizeof($cars) ; $i++) { 
							?>
	<option 
	<?php if(isset($_REQUEST['selectedcar']) && $var[$index]['maker']==$var[$i]['maker']){echo "selected";} ?>>
		<?=$var[$i]['maker']?>
	</option>

							<?php
						}


						?>


					</select>
				</td>
			</tr>
			<tr>
				<td>Year:</td>
				<td>
					<select name="year">
					
					<?php
					for ($i=2018; $i >1990; $i--) { 
						?>
<option <?php if(isset($_REQUEST['selectedcar']) && $var[$index]['year']==$i){echo "selected";} ?> >

	<?=$i?></option>
					<?php
					
					}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Model:</td>
<td><input type="text" name="model" value="<?php if(isset($_REQUEST['selectedcar'])){echo $var[$index]['model'];} ?>"></td>
			</tr>
			<tr>
				<td>Engine:</td>
				<td>
			<?php
				for ($i=0; $i <sizeof($var) ; $i++) { 
					?>
				
<label>
<input type="radio" name="cc" <?php if(isset($_REQUEST['selectedcar']) && $i==$index){echo 'checked';} ?>><?=$var[$i]['engine']?>

</label>	

				<?php	
				}


			?>
			
				</td>
			</tr>

			<tr>
				<td>Price</td>
<td>
<input type="text" name="price" value="<?php if(isset($_REQUEST['selectedcar'])){echo $var[$index]['price'];} ?>">
</td>
			</tr>
			<tr>
				<td>Additional:</td>
				<td>
					<div id="checkboxes">

			<?php
				for ($i=0; $i <sizeof($var) ; $i++) { 
					
					?>
<label>
<input type="checkbox" <?php if(isset($_REQUEST['selectedcar']) && $additional[$i]==$var[$index]["additional"][$i]){echo "checked";}?>>

<?=$additional[$i]?>
</label>
									


				<?php
				}
			?>

			

			</div>
				</td>
			</tr>
			

		</table>
	<input type="submit" name="">

	</form>



</body>
</html>





