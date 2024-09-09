<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainee List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        a {
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .operations a {
            display: inline-block;
            margin: 0 5px;
            padding: 5px 10px;
            border-radius: 4px;
            color: white;
            text-decoration: none;
        }

        .delete {
            background-color: #dc3545;
        }

        .update {
            background-color: #28a745;
        }

        .delete:hover {
            background-color: #c82333;
        }

        .update:hover {
            background-color: #218838;
        }

        .add-new {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 15px;
            border-radius: 4px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
        }

        .add-new:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Trainee List</h1>
        <a href="insert.php" class="add-new">Add New</a>
        <table>
            <tr>
                <th>Trainee ID</th>
                <th>Trainee Name</th>
                <th>Trainee Phone</th>
                <th>Trainee Salary</th>
                <th colspan="2">Operations</th>
            </tr>
            <?php
            include('conn.php');
            $select = mysqli_query($conn, "SELECT * FROM salary");
            while ($row = mysqli_fetch_array($select)) {
            ?>
            <tr>
                <td><?php echo htmlspecialchars($row['Trainee ID']); ?></td>
                <td><?php echo htmlspecialchars($row['Trainee Name']); ?></td>
                <td><?php echo htmlspecialchars($row['Trainee Phone']); ?></td>
                <td><?php echo htmlspecialchars($row['Trainee Salary']); ?></td>
                <td class="operations"><a href="delete.php?Trainee ID=<?php echo urlencode($row['Trainee ID']); ?>" class="delete">Delete</a></td>
                <td class="operations"><a href="update.php?Trainee_id=<?php echo urlencode($row['Trainee ID']); ?>" class="update">Update</a></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>
