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
        form{
            border: none;
            max-width: 150px;
            box-shadow: 2px 2px 5px white;
        }
    </style>
    </style>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1 class="card card-header">Insert Module</h1>
<body style="background-color: skyblue;">
    <form action="" method="post" class="form container p-3">
   Module_code:<input type="text" name="Module_code" class="form-control mb-3" placeholder="Enter Module code" >
       Module_name:<input type="text" name="Module_name" class="form-control mb-3" placeholder="Enter Module Name">
        Trade id:<input type="text" name="Trade_id" class="form-control mb-3" placeholder="Enter Trade_id">
    <button name="submit" class="btn btn-primary">Add New</button>
</form>
</body>
</html>