<?php
include "db.php";
 $name=$_POST['name'];
 $age=$_POST["age"];
 $email=$_POST["mobilno"];
 $mobilno=$_POST["email"];
 $password=$_POST["password"];
 $c_password=$_POST["c_password"];

 $sql="INSERT INTO user(name,age,mobilno,email,password)values('$name','$age','$mobilno','$email','$password')";
 if($conn->query($sql)){
     header("Location:index.php");
     exit();
 }
 else{
     echo "error".$conn->error;
 }

?>
