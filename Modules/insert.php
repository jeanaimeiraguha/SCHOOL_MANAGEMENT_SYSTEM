<?php

include('conn.php');
if (isset($_POST['submit'])) {
    # code...
   

    $Module_code=$_POST['Module_code'];
    $Module_name=$_POST['Module_name'];
    $Trade_id=$_POST['Trade_id'];
$insert=mysqli_query($conn, "INSERT INTO Modules VALUES('$Module_code','$Module_name',' $Trade_id')");
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
    <form action="" method="post" class="form was-validated p-5 lg-6 bg-dark my-5">
   Module_code:<input type="text" name="Module_code" class="form-control"><br>
       Module_name:<input type="text" name="Module_name" class="form-control"><br>
        Trade id:<input type="text" name="Trade_id" class="form-control"><br>
    <button name="submit" class="btn btn-primary">Add New</button>
</form>
</body>
</html>