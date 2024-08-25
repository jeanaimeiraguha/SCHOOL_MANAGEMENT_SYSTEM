<?php

include('conn.php');
$Trainee_id=$_GET['dlt'];
$delete=mysqli_query($conn, "DELETE FROM Trainee WHERE Trainee_id='$Trainee_id'");
if ($delete) {
    # code...
    header('location:select.php');
}
exit;

?>
