<?php

include('conn.php');
if (isset($_POST['submit'])) {
    # code...
   

    $Trainee_id=$_POST['Trainee_id'];
    $Trainer_id=$_POST['Trainer_id'];
    $Trainee_name=$_POST['Trainee_name'];
    $Trainee_address=$_POST['Trainee_address'];
$insert=mysqli_query($conn, "INSERT INTO Trainee VALUES('$Trainee_id','$Trainer_id',' $Trainee_name','$Trainee_address')");
if ($insert) {
    # code...
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
    <title>Document</title>
</head>
<body style="background-color: skyblue;">
    <h2 class="card card-header text-center">Insert New Trainee</h2>
    <form action="" method="post" class="form was-validated bg-dark p-5 lg-6 container my-5" >
    Trainee_id:<input type="text" name="Trainee_id" class="form-control" placeholder="Enter Trainee Id"><br>
    Trainer_id:<input type="text" name="Trainer_id" class="form-control" placeholder="Enter Trainer Id"><br>
    Trainee_name:<input type="text" name="Trainee_name" class="form-control" placeholder="Enter Trainee name"><br>
    Trainee_Adress:<input type="text" name="Trainee_address" class="form-control" placeholder="Enter Trainee Address"><br>
    <button name="submit" class="btn btn-primary">Add New</button>
</form>
</body>
</html>