<?php
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

?>
   

</body>
</html>