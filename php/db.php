<?php

$conn=mysqli_connect("localhost","root","Ramkrishna@2005","portfolio");

if($conn){
    echo("database connect successfully");
}else echo("database not connect");

?>