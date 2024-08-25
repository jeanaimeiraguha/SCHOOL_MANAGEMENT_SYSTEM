<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Trainee ID</th>
            <th>Trainee Name</th>
            <th>Trainee Phone</th>
            <th>Trainee Salary</th>
            <th colspan="2">Operations</th>
        </tr>
        <?php
        
        include('conn.php');
        $select=mysqli_query($conn, "SELECT * FROM salary");
        while($row=mysqli_fetch_array($select)){

        ?>
        <tr>
            <td><?php echo $row['Trainee_id']?></td>
            <td><?php echo $row['Trainee_name']?></td>
            <td><?php echo $row['Trainee_phone']?></td>
            <td><?php echo $row['Trainee_salary']?></td>
            
            
            <td><a href="delete.php?Trainee_id=<?php echo $row['Trainee_id']?>">Delete</a></td>
            <td><a href="update.php?Trainee_id=<?php echo $row['Trainee_id']?>">Update</a></td>
        </tr>
        <?php
        }
        ?>

    </table>
</body>
</html>