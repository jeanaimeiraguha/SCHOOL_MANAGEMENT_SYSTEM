<?php
include('conn.php');

$Trainee_id=$_GET['Trainee_id'];
$delete= mysqli_query($conn , "DELETE FROM salary where Trainee_id= '$Trainee_id'");

if ($delete) {
    # code...
    header('location:select.php');

}
exit;

?>