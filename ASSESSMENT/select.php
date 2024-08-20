
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment Records</title>
    <style>
        body {
            background-color: #87CEEB; /* Sky blue color */
        }
        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }
        .container {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Assessment Records</h1>
        <div class="text-right mb-3">
            <a href="insert.php" class="btn btn-primary">Add New</a>
        </div>
        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-light">
                <tr>
                    <th>Trainer ID</th>
                    <th>Module ID</th>
                    <th>Trade ID</th>
                    <th>Assessment Date</th>
                    <th>Assessment Name</th>
                    <th colspan="2">Operations</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include("conn.php");
            $select = mysqli_query($conn, "SELECT * FROM assessment");
            while ($row = mysqli_fetch_array($select)) {    
            ?>
                <tr>
                    <td><?php echo $row['Trainer_id']?></td>
                    <td><?php echo $row['module_id']?></td>
                    <td><?php echo $row['Trade_id']?></td>
                    <td><?php echo $row['Asessment_date']?></td>
                    <td><?php echo $row['assessment_name']?></td>
                    <td><a href="delete.php?dlt=<?php echo $row['Trade_id']?>" class="btn btn-danger">Delete</a></td>
                    <td><a href="update.php?updt=<?php echo $row['Trade_id']?>" class="btn btn-success">Update</a></td>
                </tr>
            <?php
            }?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
```

