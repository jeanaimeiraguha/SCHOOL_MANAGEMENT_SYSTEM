
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
include('conn.php');
if (isset($_POST['submit'])) {
    $Trainer_id = $_POST['Trainer_id'];
    $User_id = $_POST['User_id'];
    $Trade_id = $_POST['Trade_id'];
    $Trainer_age = $_POST['Trainer_age'];
    $Trainer_name = $_POST['Trainer_name'];
    $Phone_number = $_POST['Phone_number'];

   
    
    $insert = mysqli_query($conn, "INSERT INTO Trainer VALUES('$Trainer_id', '$User_id', '$Trade_id','$Trainer_age', '$Trainer_name', '$Phone_number')");
    
    if ($insert) {
        header('location:select.php');
    } else {
        echo "Not inserted";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Trainer</title>
</head>
<body style="background-color: skyblue;">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">Add New Trainer</h4>
                        <form action="" method="post" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="Trainer_id" class="form-label">Trainer ID</label>
                                <input type="text" name="Trainer_id" class="form-control" id="Trainer_id" placeholder="Enter Trainer ID" required>
                                <div class="invalid-feedback">
                                    Please provide a Trainer ID.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="User_id" class="form-label">User ID</label>
                                <input type="text" name="User_id" class="form-control" id="User_id" placeholder="Enter User ID" required>
                                <div class="invalid-feedback">
                                    Please provide a User ID.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="Trade_id" class="form-label">Trade ID</label>
                                <input type="text" name="Trade_id" class="form-control" id="Trade_id" placeholder="Enter Trade ID" required>
                                <div class="invalid-feedback">
                                    Please provide a Trade ID.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="Trainer_name" class="form-label">Trainer Name</label>
                                <input type="text" name="Trainer_name" class="form-control" id="Trainer_name" placeholder="Enter Trainer Name" required>
                                <div class="invalid-feedback">
                                    Please provide a Trainer Name.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="Trainer_age" class="form-label">Trainer Age</label>
                                <input type="text" name="Trainer_age" class="form-control" id="Trainer_age" placeholder="Enter Trainer Age" required>
                                <div class="invalid-feedback">
                                    Please provide a Trainer Age.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="Phone_number" class="form-label">Phone Number</label>
                                <input type="text" name="Phone_number" class="form-control" id="Phone_number" placeholder="Enter Phone Number" required>
                                <div class="invalid-feedback">
                                    Please provide a Phone Number.
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary w-100">Add New</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>