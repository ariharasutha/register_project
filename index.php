<?php
include "db.php";

if(isset($_POST['submit'])){

$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$mobilno=$_POST['mobilno'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="INSERT INTO user
(name,age,gender,mobilno,email,password)

VALUES
('$name','$age','$gender',
'$mobilno','$email','$password')";

if($conn->query($sql)){

header("Location:view.php");
exit();

}else{

echo "Error";

}

}
?>

<!DOCTYPE html>
<html>

<head>
<title>Register</title>
</head>

<body>

<h1>Registration Form</h1>

<form method="POST">

<input type="text"
name="name"
placeholder="Enter Name">

<br><br>

<input type="number"
name="age"
placeholder="Enter Age">

<br><br>

<input type="radio"
name="gender"
value="male">Male

<input type="radio"
name="gender"
value="female">Female

<br><br>

<input type="number"
name="mobilno"
placeholder="Enter Mobile">

<br><br>

<input type="email"
name="email"
placeholder="Enter Email">

<br><br>

<input type="password"
name="password"
placeholder="Enter Password">

<br><br>

<button type="submit" name="submit">
Submit
</button>

</form>

<br>

<a href="login.php">Login</a>

</body>
</html>
