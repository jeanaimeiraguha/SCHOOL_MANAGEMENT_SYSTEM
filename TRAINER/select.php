<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Trainers List</title>
</head>
<body style="background-color: #B0E0E6;">

<div class="container mt-5">
    <h2 class="text-center mb-4">Trainers List</h2>
    <div class="text-right mb-3">
        <a href="insert.php" class="btn btn-primary">Add New Trainer</a>
    </div>
    
    <table border="1" class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Trainer ID</th>
                <th>User ID</th>
                <th>Trade ID</th>
                <th>Trainer Name</th>
                <th>Trainer Age</th>
                <th>Phone Number</th>
                <th colspan="2" class="text-center">Operations</th>
            </tr>
        </thead>
        <tbody>
        <?php
        include("conn.php");
       
        $select = mysqli_query($conn, "SELECT * FROM Trainer");
        while ($row = mysqli_fetch_array($select)) {
        ?>
            <tr>
                <td><?php echo $row['Trainer_id']; ?></td>
                <td><?php echo $row['User_id']; ?></td>
                <td><?php echo $row['Trade_id']; ?></td>
                <td><?php echo $row['Trainer_name']; ?></td>
                <td><?php echo $row['Trainer_age']; ?></td>
                <td><?php echo $row['Phone_number']; ?></td>
                <td class="text-center">
                    <a href="delete.php?dlt=<?php echo $row['Trainer_id']; ?>" class="btn btn-danger">Delete</a>
                </td>
                <td class="text-center">
                    <a href="update.php?updt=<?php echo $row['Trainer_id']; ?>" class="btn btn-success">Update</a>
                </td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>