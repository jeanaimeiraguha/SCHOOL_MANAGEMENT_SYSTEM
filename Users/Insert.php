<?php

include('conn.php');
if (isset($_POST['submit'])) {
    # code...
   

    $User_name=$_POST['User_name'];
    $User_password=$_POST['User_password'];
$insert=mysqli_query($conn, "INSERT INTO users VALUES('','$User_name','$User_password')");
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
    <form action="" method="post" class="form was-validatd p-5 lg-6 bg-dark container my-5 ">
    
        User Name:<input type="text" name="User_name" class="form-control" placeholder="Enter User Name"><br>
        User Password:<input type="password" name="User_password" class="form-control" placeholder="Enter Password"><br>
    <button name="submit" class="btn btn-primary">Add New</button>
</form>
</body>
</html>