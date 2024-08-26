<?php

include('conn.php');
if (isset($_POST['submit'])) {
    $Trainer_id=$_POST['Trainer_id'];
    $module_id=$_POST['module_id'];
    $Trade_id=$_POST['Trade_id'];
    $Asessment_date=$_POST['Asessment_date'];
    $assessment_name=$_POST[' assessment_name'];
$insert=mysqli_query($conn, "INSERT INTO   assessment VALUES('$Traner_id','$module_id','$Trade_id','$Asessment_date',  '$assessment_name')");
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
    
        Trainer Id:<input type="text" name="TrainerId" class="form-control" placeholder="Trainer Id"><br>
        Module Id:<input type="number" name="Module_id" class="form-control" placeholder="Enter Module id"><br>
     Trade Id:<input type="number" name="Trade_id" class="form-control" placeholder="Enter Trade id"><br>
   Assessment Date:<input type="date" name="Assessment_date" class="form-control" placeholder="Enter Assessment  Date"><br>
   assessment_name:<input type="text" name="assessment_name" class="form-control" placeholder="Enter  assessment_name"><br>
   
    <button name="submit" class="btn btn-primary">Add New</button>
</form>
</body>
</html>