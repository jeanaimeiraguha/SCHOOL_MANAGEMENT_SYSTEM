<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Trainee_id</th>
            <th>Trainer_id</th>
            <th>Trainee_name</th>
            <th>Trainee_address</th>
        </tr>
        <?php
        include("conn.php");
        $select =mysqli_query($conn, "SELECT * FROM trainee");
        while ($row=mysqli_fetch_array($select)) {
            # code...
        
        
        ?>
        <tr>
            <td <?php echo $row['Trainee_id']?>>Trainee_id</td>
            <td <?php echo $row['Trainer_id']?>>Trainer_id</td>
            <td <?php echo $row['Trainee_name']?>>Trainee_name</td>
            <td <?php echo $row['Trainee_address']?>>Trainee_address</td>
            <td><a href="delete.php?dlt=<?php echo $row['Trainee_id']?>">Delete</a></td>
            <td><a href="update.php?upd=<?php echo $row['Trainee_id']?>">Update</a></td>
            
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>