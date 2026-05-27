<?php
session_start();
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT*FROM user where email='$email' and password='$password'";
    $result=$conn->query($sql);

    if($result->num_rows>0){
  
        echo "login success";
        header("Location:index.php");
    }
    else{
        echo "invailed login";
    }
}
?>
<!DOCTYPE html>
<body>
    <form method="POST">
EMAIL:<input type="email" id="email" name="email" placeholder="Enter Email"><br>
PASSWORD<input type="password" id="password" name="password" placeholder="Enter password"><br>
<button type="submit" name="login">login</button>
</form>   
</body>

</html>