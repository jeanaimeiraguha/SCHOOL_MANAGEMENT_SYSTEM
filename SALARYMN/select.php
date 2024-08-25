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
            <th>Trainee_id</th>
            <th>Trainee_name</th>
            <th>Trainee_phone</th>
            <th>Trainee_salary</th>
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
        </tr>
        <?php
        }
        ?>

    </table>
</body>
</html>