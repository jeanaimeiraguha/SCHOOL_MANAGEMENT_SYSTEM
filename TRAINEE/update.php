<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("conn.php");
    $Trainee_id=$_GET['upd'];
    $select=mysqli_query($conn, "SELECT * FROM Trainee where Trainee_id='$Trainee_id'");;
    $row=mysqli_fetch_array($select);

    
    ?>

<form action="" method="post">

 Trainee Id<input type="text" name="Trainee_id" value="<?php echo $row['Trainee_id']?>"> <br>
Trainer_id<input type="text" name="Trainer_id" value="<?php echo $Trainer_id['Trainer_id']?>"><br>
Trainee_name<input type="text" name="Trainee_name)" value="<?php echo $row['Trainee_name']?>"> <br>
Trainee_address<input type="text" name="Trainee_address" value="<?php echo $row['Trainee_address']?>"><br>
<button name="submit">Update</button>
</form>

</body>
</html>
<?php

include("conn.php");
if (isset($_POST['submit'])) {
    # code...
    $Trainee_id=$_POST['Trainee_id'];
    $Trainer_id=$_POST['Trainer_d'];
    $Trainee_name=$_POST['Trainee_name'];
    $Trainee_address=$_POST['Trainee_address'];
    $update= mysqli_query($conn, "UPDATE Trainee SET Trainee_id='$Trainee_id', Trainer_id='$Trainer_id', Trainee_name='$Trainee_name', Trainee_address='$Trainee_address' WHERE  Trainee_id='$Trainee_id' ");
    if ($update) {
        # code...
        header('location:select.php');

    }
    exit;
}

?>