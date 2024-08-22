<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: skyblue;">
    <?php
    
    include("conn.php");
 
include("conn.php");

// Check if 'updt' is set in the URL
if (isset($_GET['updt'])) {
    $Trainee_id = $_GET['updt']; // Assuming that 'updt' is meant to be Trainee_id

    // Proper SELECT query
    $select = mysqli_query($conn, "SELECT * FROM Trainee WHERE Trainee_id='$Trainee_id'");
    
    if (mysqli_num_rows($select) > 0) {
        $row = mysqli_fetch_array($select);
    } else {
        echo "No trainee found.";
        exit;
    }
} 
?>
 
      <form action="" method="post" class="form was-validated p-5 lg-6 bg-dark container my-5">
      

Trainee_id <input type="text" name="Trainee_id" value="<?php echo $row['Trainee_id']?>" class="form-control" placeholder="Enter Trainee id"> <br>
Trainer_id <input type="text" name="Trainer_id"  value="<?php echo $row['Trainer_id']?>" class="form-control" placeholder="Enter Trainer id"> <br>
Trainee_address <input type="text" name="Trainee_address"  value="<?php echo $row['Trainee_address']?>" class="form-control" placeholder="Enter Trainee address"> <br>
Trainee_name <input type="text" name="Trainee_name"  value="<?php echo $row['Trainee_name']?>" class="form-control" placeholder="Enter Trainee Name"> <br>

<button name="submit" class="btn btn-success">Update</button>
</form>
</body>
</html>
<?php
include('conn.php');
if (isset($_POST['submit'])) {
    $Trainee_id=$_POST['Trainee_id'];
    $Trainer_id=$_POST['Trainer_id'];
    $Trainee_name=$_POST['Trainee_name'];
    $Trainee_address=$_POST['Trainee_address'];
    $update=mysqli_query($conn, "UPDATE Trainee SET Trainee_id='$Trainee_id',Trainer_id='$Trainer_id',Traineee_name='$Trainee_name' ,Trainee_address='$Trainee_address' WHERE Trainee_id='$Trainee_id'");
if ($update) {
    # code...
    header('location:select.php');
}
exit;

}

?>
// working normally
//