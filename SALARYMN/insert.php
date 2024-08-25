<?php

include('conn.php');


if (isset($_POST['submit'])) {
    # code...
    $Trainee_name= $_POST['Trainee_name'];
	$Trainee_phone= $_POST['Trainee_phone'];
    $Trainee_Salary= $_POST['Trainee_salary'];

    $insert= mysqli_query($conn , "INSERT INTO salary  VALUES('', '$Trainee_name', '$Trainee_phone', '$Trainee_Salary')");

    if ($insert) {
        # code...
        header('location:select.php');
    }


}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="" method="post">
Trainee_name<input type="text" name="Trainee_name"> <br>
Trainee_phone<input type="text" name="Trainee_phone"> <br>
  Trainee_salary<input type="text" name="Trainee_salary"> <br>
  <button name="submit">Add New</button>
</form> 
</body>
</html>