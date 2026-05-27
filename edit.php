<?php

include "db.php";

$id=isset($_GET['id']) ? intval($_GET['id']) : 0;

$result=$conn->query("SELECT * FROM user WHERE id=$id");

$row=$result->fetch_assoc();

if(isset($_POST['update'])){

$name=$_POST['name'];
$age=$_POST['age'];
$mobilno=$_POST['mobilno'];
$email=$_POST['email'];

$sql="UPDATE user SET

name='$name',
age='$age',
mobilno='$mobilno',
email='$email'

WHERE id=$id";

if($conn->query($sql)){

header("Location:index.php");
exit();

}else{

echo "Error ".$conn->error;

}

}

?>

<!DOCTYPE html>
<html>

<head>

<title>Edit Page</title>

</head>

<body>

<h2>Edit User</h2>

<form method="POST">

<input type="text"
name="name"
value="<?php echo $row['name']; ?>">

<br><br>

<input type="number"
name="age"
value="<?php echo $row['age']; ?>">

<br><br>

<input type="number"
name="mobilno"
value="<?php echo $row['mobilno']; ?>">

<br><br>

<input type="email"
name="email"
value="<?php echo $row['email']; ?>">

<br><br>

<button type="submit" name="update">
Update
</button>

</form>

</body>

</html>
