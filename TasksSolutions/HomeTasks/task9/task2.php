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

	<form action="submit2.php" method="post">
		<table border="1px">
			<tr>
				<td>Maker:</td>
				<td>
					<select name="maker">
						<option>Toyota</option>
						<option>BMW</option>
						<option>Mazda</option>
						<option>Porsche</option>
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
						<option><?=$i?></option>
						
						<?php
					}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Model:</td>
				<td><input type="text" name="model"></td>
			</tr>
			<tr>
				<td>Engine:</td>
				<td>
			<label><input type="radio" name="cc" value="Petroleum" checked="checked">Petroleum</label>	
			<label><input type="radio" name="cc" value="Gas">Gas</label>
			<label><input type="radio" name="cc" value="Diesel">Diesel</label>
				</td>
			</tr>

			<tr>
				<td>Price</td>
				<td><input type="text" name="price"></td>
			</tr>
			<tr>
				<td>Additional:</td>
				<td>
					<div id="checkboxes">
		<label><input type="checkbox" name="tax" checked="checked">tax payed</label>
		<label><input type="checkbox" name="tech">technical check passed</label>
		<label><input type="checkbox" name="inv">doesn't require investement</label>
			</div>
				</td>
			</tr>
			

		</table>
	<input type="submit" name="">

	</form>



</body>
</html>