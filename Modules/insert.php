<?php
include('conn.php');

if (isset($_POST['submit'])) {
    $Module_code = $_POST['Module_code'];
    $Module_name = $_POST['Module_name'];
    $Trade_id = $_POST['Trade_id'];

    $insert = mysqli_query($conn, "INSERT INTO Modules (Module_code, Module_name, Trade_id) VALUES('$Module_code', '$Module_name', '$Trade_id')");

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
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Module</title>
    <style>
        body {
            background-color: #f0f8ff; /* Alice blue color */
        }

        .container {
            max-width: 500px;
            margin-top: 30px;
        }

        .card-header {
            background-color: #007BFF;
            color: white;
            text-align: center;
            font-size: 1.5rem;
        }

        .form-control {
            border-radius: 0.25rem;
        }

        .btn-primary {
            background-color: #007BFF;
            border-color: #007BFF;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004080;
        }

        .form {
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1 class="card-header">Insert Module</h1>
            <form action="" method="post" class="form">
                <div class="form-group">
                    <label for="Module_code">Module Code:</label>
                    <input type="text" name="Module_code" id="Module_code" class="form-control mb-3" placeholder="Enter Module Code" required>
                </div>
                <div class="form-group">
                    <label for="Module_name">Module Name:</label>
                    <input type="text" name="Module_name" id="Module_name" class="form-control mb-3" placeholder="Enter Module Name" required>
                </div>
                <div class="form-group">
                    <label for="Trade_id">Trade ID:</label>
                    <input type="text" name="Trade_id" id="Trade_id" class="form-control mb-3" placeholder="Enter Trade ID" required>
                </div>
                <button name="submit" class="btn btn-primary btn-block">Add New</button>
            </form>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
