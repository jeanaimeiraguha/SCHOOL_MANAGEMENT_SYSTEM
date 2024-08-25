<?php
include('conn.php');
    $Trainee_id =$_GET['Trainee_id'];
    $select = mysqli_query($conn , "SELECT * FROM salary where Trainee_id='$Trainee_id'");
    $row= mysqli_fetch_array($select);
    
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

include('conn.php');

if (isset($_POST['submit'])) {
    # code...
    $Trainee_name= $_POST['Trainee_name'];
    $Trainee_phone = $_POST['Trainee_phone'];
    $Trainee_salary= $_POST['Trainee_salary'];

    $update= mysqli_query($conn, "UPDATE salary SET Trainee_name='$Trainee_name', Trainee_phone='$Trainee_phone', Trainee_salary='$Trainee_salary' WHERE Trainee_id='$Trainee_id'");
    if ($update) {
        # code...
        header('location:select.php');
    }
    exit;
}

?>
<form action="" method="post">

Trainee Name<input type="text" name="" value="">
Trainee Phone<input type="text" name="" value="">
Trainee Salary<input type="text" name="" value="">
</form>
   

</body>
</html>