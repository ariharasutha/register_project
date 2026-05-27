<?php

session_start();

include "db.php";

if(isset($_POST['login'])){

$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM user 
WHERE email='$email' 
AND password='$password'";

$result=$conn->query($sql);

if($result->num_rows > 0){

$_SESSION['user']=$email;

header("Location:index.php");
exit();

}else{

echo "Invalid Login";

}

}

?>

<!DOCTYPE html>
<html>

<head>

<title>Login</title>

</head>

<body>

<form method="POST">

EMAIL:
<input type="email"
id="email"
name="email"
placeholder="Enter Email">

<br><br>

PASSWORD:
<input type="password"
id="password"
name="password"
placeholder="Enter Password">

<br><br>

<button type="submit" name="login">
Login
</button>

</form>

</body>

</html>
