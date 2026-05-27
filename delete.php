<?php
$id=isset($_GET['id'])?intval($_GET['id']):0;
$sql=$conn->query("DELETE FROM user where id=$id");
if($conn->query($sql)){
    header("Location:index.php");
    exit;
}
else{
    echo "error".$conn->error;
}



?>
