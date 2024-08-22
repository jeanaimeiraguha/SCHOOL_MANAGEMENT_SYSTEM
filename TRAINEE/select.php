<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: skyblue;">
    <h2 class="card card-header text-center">Trainee Lists</h2>
    <a href="insert.php" class="btn btn-primary my-5">Add New</a>
    <table border="1" class="table table-bordered table-striped table-hover container">
<tr>
        <th>Trainee_id</th>
        <th>Trainer_id</th>
        <th>Trainee_name</th>
        <th>Trainee_address</th>
        <th colspan="2">Operations</th>
    </tr>
    <?php
    include("conn.php");
    $select=mysqli_query($conn, "SELECT * FROM Trainee");
    while($row=mysqli_fetch_array($select)){    
    ?>
    <tr>
        <td><?php echo $row['Trainee_id']?></td>
        
        <td><?php echo $row['Trainer_id']?></td>
        <td><?php echo $row['Trainee_name']?></td>
        <td><?php echo $row['Trainee_address']?></td>

        <td><a href="delete.php?dlt=<?php echo $row['Trainee_id'];?>" class="btn btn-danger">Delete</a></td>
        <td><a href="update.php?upd=<?php echo $row['Trainee_id'];?>" class="btn btn-success">Update</a></td>
    </tr>
    <?php
    
    }?>
    </table>
</body>
</html>