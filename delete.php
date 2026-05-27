<?php

include "db.php";

$id=isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql="DELETE FROM user WHERE id=$id";

if($conn->query($sql)){

header("Location:index.php");
exit();

}else{

echo "Error ".$conn->error;

}

?>
