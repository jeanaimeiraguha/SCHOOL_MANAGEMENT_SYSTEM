<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Optional: Link to custom CSS file if needed -->
    <link rel="stylesheet" href="css/custom.css">
</head>
<body style="background-color: skyblue;">

    <div class="container my-5">
        <!-- Button to add new item -->
        <a href="insert.php" class="btn btn-primary mb-4">Add New</a>

        <!-- Table with Bootstrap styling -->
        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>User Password</th>
                    <th colspan="2" class="text-center">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("conn.php");
                $select = mysqli_query($conn, "SELECT * FROM users");
                while ($row = mysqli_fetch_array($select)) {
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['User_id']); ?></td>
                    <td><?php echo htmlspecialchars($row['User_name']); ?></td>
                    <td><?php echo htmlspecialchars($row['User_password']); ?></td>
                    <td><a href="delete.php?dlt=<?php echo urlencode($row['User_id']); ?>" class="btn btn-danger btn-sm">Delete</a></td>
                    <td><a href="update.php?updt=<?php echo urlencode($row['User_id']); ?>" class="btn btn-success btn-sm">Update</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Optionally, include Bootstrap JS and dependencies if needed -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.2.0/js/bootstrap.min.js"></script>
</body>
</html>
