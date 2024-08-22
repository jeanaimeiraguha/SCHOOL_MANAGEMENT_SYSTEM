<?php
    include("conn.php");

    // Check if 'upd' is set in the URL
    if(isset($_GET['upd'])){
        $Trainee_id = $_GET['upd'];

        // Fetch the specific trainee data
        $select = mysqli_query($conn, "SELECT * FROM Trainee WHERE Trainee_id='$Trainee_id'");

        // Check if a record was found
      $row=mysqli_fetch_array($select);}
    ?>

    <form action="" method="post" class="form was-validated p-5 lg-6 bg-dark container my-5">
        Trainee_id <input type="text" name="Trainee_id" value="<?php echo $row['Trainee_id'] ?>" class="form-control" placeholder="Enter Trainee ID"> <br>
        Trainer_id <input type="text" name="Trainer_id" value="<?php echo $row['Trainer_id'] ?>" class="form-control" placeholder="Enter Trainer ID"> <br>
        Trainee_address <input type="text" name="Trainee_address" value="<?php echo $row['Trainee_address']; ?>" class="form-control" placeholder="Enter Trainee Address"> <br>
Trainee_name <input type="text" name="Trainee_name" value="<?php echo $row['Trainee_name']?>" class="form-control" placeholder="Enter Trainee Name"> <br>

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
    $update=mysqli_query($conn, "UPDATE Trainee SET 
    Trainee_id='$Trainee_id',
     Trainer_id='$Trainer_id' , 
     Traineee_name='$Trainee_name' ,
     Trainee_address='$Trainee_address'
      WHERE Trainee_id='$Trainee_id'");
if ($update) {
    # code...
    header('location:select.php');
}
exit;

}

?>
// working normally
//made by iraguha

