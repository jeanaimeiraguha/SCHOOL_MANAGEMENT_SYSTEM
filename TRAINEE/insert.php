<?php
include('conn.php');

if (isset($_POST['submit'])) {
    $Trainee_id = $_POST['Trainee_id'];
    $Trainer_id = $_POST['Trainer_id'];
    $Trainee_name = $_POST['Trainee_name'];
    $Trainee_address = $_POST['Trainee_address'];

    $insert = mysqli_query($conn, "INSERT INTO Trainee VALUES('$Trainee_id', '$Trainer_id', '$Trainee_name', '$Trainee_address')");

    if ($insert) {
        header('location:select.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert New Trainee</title>
    <style>
        body {
            background-color: #e9f7f9; /* Light cyan background */
        }

        .container {
            max-width: 600px;
        }

        .card-header {
            background-color: #007BFF;
            color: white;
            font-size: 1.5rem;
        }

        .form {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 30px;
        }

        .form-control {
            border-radius: 0.25rem;
            margin-bottom: 15px;
        }

        .btn-primary {
            background-color: #007BFF;
            border-color: #007BFF;
            border-radius: 0.25rem;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004080;
        }

        h2 {
            margin-top: 20px;
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="card card-header text-center">Insert New Trainee</h2>
        <form action="" method="post" class="form">
            <div class="form-group">
                <label for="Trainee_id">Trainee ID:</label>
                <input type="text" name="Trainee_id" id="Trainee_id" class="form-control" placeholder="Enter Trainee ID" required>
            </div>
            <div class="form-group">
                <label for="Trainer_id">Trainer ID:</label>
                <input type="text" name="Trainer_id" id="Trainer_id" class="form-control" placeholder="Enter Trainer ID" required>
            </div>
            <div class="form-group">
                <label for="Trainee_name">Trainee Name:</label>
                <input type="text" name="Trainee_name" id="Trainee_name" class="form-control" placeholder="Enter Trainee Name" required>
            </div>
            <div class="form-group">
                <label for="Trainee_address">Trainee Address:</label>
                <input type="text" name="Trainee_address" id="Trainee_address" class="form-control" placeholder="Enter Trainee Address" required>
            </div>
            <button name="submit" class="btn btn-primary btn-block">Add New</button>
        </form>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
