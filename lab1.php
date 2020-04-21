<?php
include_once 'DBConnector.php';
include_once 'user.php';
$con= new DBConnector;//Database connection is made
if (isset($_POST['btn-save'])) {

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$city=$_POST['city_name'];

//Creating a user object
$user= new User($first_name,$last_name,$city);
$res=$user->save();

//$res = user -> save();

//Now we check if the save operation occured succesfully
if ($res) {
	echo "Save operation was succesfully";
	# code...
}else{
	echo "An error occured";
}

}elseif (isset($_POST['btn-read'])) {
	$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$city=$_POST['city_name'];
	$user= new User($first_name,$last_name,$city);
	$res=$user-> readAll();
}



?>


<!DOCTYPE html>
<html>
<head>
	<title>Lab 1</title>
</head>
<body>
<link href = "registration.css" type = "text/css" rel = "stylesheet" /> 
<h2>Sign Up</h2> 
	<form method="post">
		<TABLE align="center">
			<tr>
				<td><input type="text" name="first_name" required placeholder="First Name"></td>
			</tr>
			<tr>
				<td><input type="text" name="last_name" required placeholder="Last Name"></td>
			</tr>
			<tr>
				<td><input type="text" name="city_name" required placeholder="City"></td>
			</tr>
			<tr>
				<td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
			</tr>
			<tr>
				<td><button type="submit" name="btn-read"><strong>READ ALL</strong></button></td>
			</tr>

			
			
		</TABLE>
	</form>

</body>
</html>