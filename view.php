<?php

include "db.php";

$result=$conn->query("SELECT * FROM user");

?>

<!DOCTYPE html>
<html>

<head>
<title>View Users</title>
</head>

<body>

<h1>User Details</h1>

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

<a href="index.php">Add User</a>

<br><br>

<a href="ajax.html">AJAX</a>

</body>

</html>
