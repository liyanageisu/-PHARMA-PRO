<?php require_once('include/connection.php'); ?>
<?php require_once('include/session.php'); ?>
<?php 
	if (isset($_POST['submit'])) {
		$id =$_POST['id'];
		$f_name =$_POST['f_name'];
		$l_name =$_POST['l_name'];
		$u_name =$_POST['u_name'];
		$email =$_POST['email'];
		$telephone =$_POST['telephone'];
		$nic =$_POST['nic'];
		$password =$_POST['password'];
		$type =$_POST['type'];

		$sql = "INSERT INTO employee (id,f_name,l_name,u_name,email,telephone,nic,password,type) VALUES('$id','$f_name',$l_name','$u_name','$email','$telephone','$nic','$password','$type')";
		mysqli_query($con,$sql);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/addUser.css">
</head>
<body>
	<h2>Add Users</h2>
	<form class="addUser" method="post">
		<div class="input_fields">
		<p>Id</p>
		<input type="number" class="input" name="id" id="id">
		<p>First Name</p>
		<input type="text" class="input" name="f_name" id="f_name">
		<p>Last name</p>
		<input type="text" class="input" name="l_name" id="l_name">
		<p>User Name</p>
		<input type="text" class="input" name="u_name" id="u_name">
		<p>Email</p>
		<input type="email" class="input" name="email" id="email">
		<p>Telephone</p>
		<input type="number" class="input" name="telephone" id="telephone">
		<p>Nic NO:</p>
		<input type="text" class="input" name="nic" id="nic">
		<p>Password</p>
		<input type="password" class="input" name="password" id="password">
		<p>Type</p>
		<input type="number" class="input" name="type" id="type">
		</div>		
		<input type="submit" name="submit" value="Add User">

	</form>
</body>
</html>