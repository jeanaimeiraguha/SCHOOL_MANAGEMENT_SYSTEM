<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="insert.php">Add New</a>
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
            <td><?php echo $row['Trainee ID']?></td>
            <td><?php echo $row['Trainee Name']?></td>
            <td><?php echo $row['Trainee Phone']?></td>
            <td><?php echo $row['Trainee Salary']?></td>
            
            
            <td><a href="delete.php?Trainee ID=<?php echo $row['Trainee ID']?>">Delete</a></td>
            <td><a href="update.php?Trainee_id=<?php echo $row['Trainee ID']?>">Update</a></td>
        </tr>
        <?php
        }
        ?>

    </table>
</body>
</html>