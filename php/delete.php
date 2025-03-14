<?php

$email=$_GET['id'];

try {
    
    require "./db.php";
    $sql="DELETE FROM candidate WHERE email='$email'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("Location:./adminer.php");
    }else echo("not delete data");

} catch (\Throwable $th) {
    throw $th;
}

?>