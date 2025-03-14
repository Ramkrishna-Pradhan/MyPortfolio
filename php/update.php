<?php

    try {
        if(isset($_GET['id'])){
            $email=$_GET['id'];
            require './db.php';
        $sql= "SELECT * FROM candidate WHERE email='$email'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_row($result);

        }if($_SERVER['REQUEST_METHOD']=='POST'){
                    require './db.php';
                    $name=$_POST["name"];
                    $email=$_POST["email"];
                    $subject=$_POST["subject"];
                    $massage=$_POST["massage"];
                   
                                $sql="UPDATE candidate SET name='$name', subject='$subject',massage='$massage' WHERE email='$email'";
                                $result=mysqli_query($conn,$sql);
                                if($result){
                                    header("Location:./adminer.php");  
                                }else{
                                    echo("not update");
                                }
                    
                            }
                         
        
    } catch (\Throwable $th) {
        echo "Somthing went wrong";
        echo $th;
    }
   
  

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/update.css">
</head>
<body> 
   

<div>
<form class="form" action="./update.php" method="POST">
    <span class="header">Update Data</span>
    <div class="form-container">
            <span class="text">Name</span><br>
            <input type="text" class="input" placeholder="Enter Your name" name="name" value="<?php echo $row[0] ?>" required ><br><br>
            <span class="text">Email</span><br>
            <input type="text" class="input" placeholder="Enter Your email" name="email" value="<?php echo $row[1] ?>" readonly ><br><br>
            <span class="text">Subject</span><br>
			<input type="text" class="input" placeholder="Enter Your subject" name="subject" value="<?php echo $row[2] ?>" required ><br><br>
            <span class="text">Massage</span><br>
            <input type="text" class="input" placeholder="Enter Your massage" name="massage" value="<?php echo $row[3] ?>" required ><br><br>
    </div>
    <button type="submit" class="button">Click to Update </button>
</form>

</div>
    
</body>
</html>