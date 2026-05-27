<?php
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

<title>Registration Form</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<h1 id="Head">WELCOME</h1>

<form method="POST">

<input type="text"
id="name"
name="name"
placeholder="Enter Name">

<br><br>

<input type="number"
name="age"
id="age"
placeholder="Enter Age">

<br><br>

<p>Gender:</p>

<input type="radio" name="gender" value="male">Male

<input type="radio" name="gender" value="female">Female

<input type="radio" name="gender" value="other">Other

<br><br>

<input type="number"
id="mp_no"
name="mobilno"
placeholder="Enter Mobile No">

<br><br>

<input type="email"
id="email"
name="email"
placeholder="Enter Email">

<br><br>

<input type="password"
id="password"
name="password"
placeholder="Enter Password">

<br><br>

<input type="password"
id="C_password"
name="c_password"
placeholder="Confirm Password">

<br><br>

<button type="submit" name="submit">
Submit
</button>

</form>

<?php

if(isset($_POST["submit"])){

$name=$_POST["name"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$mobilno=$_POST["mobilno"];
$password=$_POST["password"];

$sql="INSERT INTO user
(name,age,gender,email,mobilno,password)

VALUES
('$name','$age','$gender','$email','$mobilno','$password')";

if($conn->query($sql)){

echo "Inserted Successfully";

}else{

echo "Error ".$conn->error;

}

}

?>

<br><br>

<table border="1">

<tr>

<th>Id</th>
<th>Name</th>
<th>Age</th>
<th>Gender</th>
<th>Mobile</th>
<th>Email</th>
<th>Password</th>
<th>Action</th>

</tr>

<?php

$result=$conn->query("SELECT * FROM user");

while($row=$result->fetch_assoc()){

?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['age']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['mobilno']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['password']; ?></td>

<td>

<a href="edit.php?id=<?php echo $row['id']; ?>">
Edit
</a>

<a href="delete.php?id=<?php echo $row['id']; ?>">
Delete
</a>

</td>

</tr>

<?php } ?>

</table>

<br><br>

<a href="ajax.html">AJAX</a>

<br><br>

<a href="login.php">Login</a>

</body>

</html>
