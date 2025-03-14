<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    require './db.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $massage=$_POST['massage'];


    try {
        if(!empty($name)&&!empty($email)&&!empty($subject)){
            $sql="INSERT INTO `candidate`() VALUES('$name','$email','$subject','$massage')";
            $result=mysqli_query($conn,$sql);

            if($result){
                header("Location:../html/contact.html");
                echo("insert data successfully");

            }
            else{
                echo("not insert data");
            }
        }
    } catch (\Throwable $th) {
        echo ("error");
        echo $th;
    }

}

?>