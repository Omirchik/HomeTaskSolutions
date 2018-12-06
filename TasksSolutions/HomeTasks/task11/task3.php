
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<table cellspacing="1">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Login"></td>
			</tr>
		</table>
	</form>
	<?php
	session_start();

	if (isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password'])) {
		$username=$_POST['username'];
		$password=$_POST['password'];
		$dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = 'root';
        $conn = mysqli_connect($dbhost, $dbuser, "", 'mydb');
        $sql= "select * from users where username='$username' and password='$password'";
        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)==1) {
        	$row = mysqli_fetch_assoc($result);
        	$_SESSION['username']=$username;
        	$_SESSION['admin']=$row['admin'];
        	header('Location:task3B.php');
        }else{
        	echo "Invalid account";
        }
	}

 ?>
</body>
</html>