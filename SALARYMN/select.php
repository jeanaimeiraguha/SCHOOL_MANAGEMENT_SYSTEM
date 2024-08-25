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
        

        ?>

    </table>
</body>
</html>