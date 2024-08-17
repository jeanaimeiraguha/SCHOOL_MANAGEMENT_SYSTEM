<?php

include('conn.php');
$Module_code=$_GET['dlt'];
$delete=mysqli_query($conn, "DELETE FROM modules WHERE Module_code='$Module_code'");
if ($delete) {
    # code...
    header('location:select.php');
}
exit;

?>