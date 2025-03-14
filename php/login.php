<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $aemail="ram@2005";
    $apassword=1478525;
    

        try {
            if($email&&$password){
                if($aemail==$email&& $apassword==$password){
                    header("Location:./adminer.php");
                }else{
                    echo "Invalid Username or Password";
                }
            
        }else{
            header("Location:../html/home.html");
        }
        
        } catch (\Throwable $th) {
            echo "error";
        }
       
}

?>