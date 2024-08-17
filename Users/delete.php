<?php

include('conn.php');
$User_id=$_GET['dlt'];
$delete=mysqli_query($conn, "DELETE FROM users WHERE User_id='$User_id'");
if ($delete) {
    # code...
    header('location:select.php');
}
exit;

?>