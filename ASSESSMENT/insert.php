<?php
include('conn.php');
if (isset($_POST['submit'])) {
    // Retrieve values from form inputs
    $Trainer_id = $_POST['Trainer_id'];
    $module_id = $_POST['module_id'];
    $Trade_id = $_POST['Trade_id'];
    $Asessment_date = $_POST['Asessment_date'];
    $assessment_name = $_POST['assessment_name'];

    // Insert data into the database
    $insert = mysqli_query($conn, "INSERT INTO assessment (Trainer_id, module_id, Trade_id, Asessment_date, assessment_name) VALUES ('$Trainer_id', '$module_id', '$Trade_id', '$Asessment_date', '$assessment_name')");

    if ($insert) {
        header('location:select.php');
    }
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Assessment</title>
</head>
<body style="background-color: skyblue;">
    <form action="" method="post" class="form was-validatd p-5 lg-6 bg-dark container my-5">
        <label for="Trainer_id">Trainer Id:</label>
        <input type="text" name="Trainer_id" class="form-control" placeholder="Trainer Id"><br>

        <label for="module_id">Module Id:</label>
        <input type="number" name="module_id" class="form-control" placeholder="Enter Module id"><br>

        <label for="Trade_id">Trade Id:</label>
        <input type="number" name="Trade_id" class="form-control" placeholder="Enter Trade id"><br>

        <label for="Asessment_date">Assessment Date:</label>
        <input type="date" name="Asessment_date" class="form-control" placeholder="Enter Assessment Date"><br>

        <label for="assessment_name">Assessment Name:</label>
        <input type="text" name="assessment_name" class="form-control" placeholder="Enter assessment name"><br>

        <button name="submit" class="btn btn-primary">Add New</button>
    </form>
</body>
</html>
