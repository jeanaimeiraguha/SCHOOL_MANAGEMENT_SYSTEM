<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="justify-content-center">
    <a href="../VIEW/index.php">Back</a>
    <a href="insert.php" class="btn btn-primary mt-3 my-5" >Add New</a>
    <table border="1" class="table table-striped table bordered container">
        <tr>
            <th>Trainee_id</th>
            <th>Trainer_id</th>
            <th>Trainee_name</th>
            <th>Trainee_address</th>
            <th colspan="2">Operations</th>
        </tr>
        <?php
        include("conn.php");
        $Select = mysqli_query($conn, "SELECT * FROM trainee");
        while($row=mysqli_fetch_array($Select)) {
            # code...
        
        
        ?>
        <tr>
            <td> <?php echo $row['Trainee_id']?></td>
            <td> <?php echo $row['Trainer_id']?></td>
            <td> <?php echo $row['Trainee_name']?></td>
            <td> <?php echo $row['Trainee_address']?></td>
            <td><a href="delete.php?dlt=<?php echo $row['Trainee_id']?>">Delete</a></td>
            <td><a href="update.php?upd=<?php echo $row['Trainee_id']?>">Update</a></td>
        
        </tr>
        <?php
        }
        ?>
          
      
    </table>
  
</body>
</html>