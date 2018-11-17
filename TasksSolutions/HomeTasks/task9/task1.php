<!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  	<style type="text/css">
  		#card{
  			display: flex;

  		}
  		.c{
  			display: flex;
  			flex-direction: column;
  		}
  		input{
  			margin-bottom: 3px;
  		}
  		span{
  			margin-bottom: 7px;
  		}
  		.accept{
  			font-weight: bold;
  			padding: 5px;
  			border: 2px solid red;
  			width: 400px;
  			margin-bottom: 5px;
  		}
  	</style>
  </head>
  <body>


  	<?php
  		$d=array(
  			'username'=>NULL,
  			'password'=>NULL,
  			'passcon'=>NULL,
  		);
  		if (isset($_POST['Username'])) {

  		if ($_POST['Username']) {
  			$d['username']=$_POST['Username'];?>
  			
  			<div class="accept">Username <?=$d['username']?> is already reserved</div>

  			<?php 
		}else{
			?>
			<div class="accept">Username should not be empty.</div>				
  		
  		<?php
  		}

  		if ($_POST['pass']) {
  			$d['password']=$_POST['pass'];
  		}
  		if ($_POST['passc']) {
  			$d['passcon']=$_POST['passc'];
  		}
  		if ($d['password']==NULL && $d['passcon']==NULL) {
  			?>
  			<div class="accept">Password and Confirm password should not be empty.</div>

  			<?php
  		}elseif ($d['password']!=NUll && $d['passcon']==NULL) {
  			?>
  			<div class="accept">Confirm password should not be empty.</div>

  			<?php
  		}elseif ($d['password']==NUll && $d['passcon']!=NULL) {
  			$d['passcon']=NULL;
  			?>
  			<div class="accept">Password and Confirm password should not be empty.</div>

  			<?php
  		}elseif ($d['password']!=$d['passcon']) {
  			?>
  			<div class="accept">Password and Confirm password does not equal to each other.</div>

  			<?php
  		}else{
  			?>
  			<div class="accept">User reserved successfully</div>
  			<?php
  			$d['username']=NULL;
  			$d['password']=NULL;
  			$d['passcon']=NULL;
  		}
  		}

  	?>

  	<form method="post">
  		
  		<div id="card">
  			
  			<div class="c">
  				<span>Username:</span>
  				<span>Password:</span>
  				<span>Confirm Password:</span>

  			</div>

  			<div class="c">
  				<input type="text" name="Username" value="<?php echo $d['username'];?>">
  				<input type="Password" name="pass" value="<?php echo $d['password'];?>">
  				<input type="Password" name="passc" value="<?php echo $d['passcon'];?>">
  			</div>

  		</div>
  		<input type="submit" name="">


  	</form>

  </body>
  </html>




