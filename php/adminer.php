<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminer</title>
    <link rel="stylesheet" href="../css/adminer.css">
</head>
<body>
<?php require './db.php'; ?>

<div class="container">
        <h1 class="candidate">Candidate List</h1>
        <table class="table">
            <tr>
                <th class="head">Name</th>
                <th class="head">Email</th>
                <th class="head">Subject</th>
                <th class="head">Massage</th>
                <th class="head">Edit</th>
                <th class="head">Delete</th>
             </tr>

             <tbody id="student-list">

                <?php
                $sql="SELECT * FROM `candidate`";
                $result=mysqli_query($conn,$sql);
                if($result){
                     while($row=mysqli_fetch_assoc($result)){ 

                ?>
                <tr>
                <td><?php echo $row["name"] ?></td>
                <td><?php echo $row["email"] ?></td>
                <td><?php echo $row["subject"] ?></td>
                <td><?php echo $row["massage"] ?></td>
                <td><a href="../php/update.php?id=<?php echo $row["email"] ?>"><button type="button" class="update" >Edit</button></a></td>
                 <td><a href="../php/delete.php?id=<?php echo $row["email"] ?>"><button type="button" class="delete">Delete</button></a></td>
                <?php
         }
        }
                ?>  

             </tbody>
        </table>
    </div>
    </div>

</body>
</html>