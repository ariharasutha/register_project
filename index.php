<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration From</title>
</head>
<link rel="stylesheet" href="style.css">
<script src="https://googleapis.com"></script>
<body>
    <h1 ID="Head">WELCOME</h1>
    <form method="POST" action="login.php">
     name: <input type="text" id="name" name="name" placeholder="Enter Name"><br>
      <input type="number"  name="age" id="age" placeholder="Enter Age"><br>
        <div class="gender-section">
            <p class="section-title">Gender:</p>
            
            <label class="radio-container">
                <input type="radio" name="gender" value="male">
                Male
            </label>
    
            <label class="radio-container">
                <input type="radio" name="gender" value="female">
                Female
            </label>
    
            <label class="radio-container">
                <input type="radio" name="gender" value="other">
                Other
            </label>
        </div>
        <input type="number" id="mp_no" name=mobilno placeholder="Enter Mobile_NO"><br>
        <input type="email" id="email" name="email" placeholder="Enter Email"><br>
        <input type="password" id="password" name="password" placeholder="Enter password"><br>
        <input type="password" id="C_password" name=c_password placeholder="Enter confrim password"><br><br>
        <button type="submit" id="bt1">submit</button>
        
    </form>
    <?php
    if(isset($_POST["submit"])){
        $name=$_POST["name"];
        $age=$_POST["age"];
        $email=$_POST["email"];
        $mobilno=$_POST["mobilno"];
        $password=$_POST["password"];
        $c_password=$_POST["c_password"];

        $sql="INSERT INTO user(name,age,email,mobilno,password)values('$name','$age','$email','$mobilno','$password')";
        if($conn->query($sql)){
            header("Location:R_FORM.php");
            exit();
        }
        else{
            echo "error".$conn->error;
        }
        ?>
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>age</th>
                <th>email</th>
                <th>mobilno</th>
                <th>password</th>
            </tr>
            <?php
            $result=$conn->query("SELECT * FROM user");
            while($row=$result->fetch_assoc()){
                ?>
                <tr>
                    <th><?php echo $row['id'];?></th>
                    <th><?php echo $row['name'];?></th>
                    <th><?php echo $row['age'];?></th>
                    <th><?php echo $row['email'];?></th>
                    <th><?php echo $row['mobilno'];?></th>
                    <th><?php echo $row['password'];?></th>
                    <th>
                        <a href="edit.php?id=<?php echo $row['id'];?>">edit</a>
                        <a href="delete.php?id=<?php echo $row['id'];?>">delete</a>
                        
                    </th>

                </tr>
                <?php
            }
            ?>
            
        </table>
        <?php
    }
    ?>
</body>
<a href="ajax.html">aja</a>
<a href="login.php">login</a>
</html>
