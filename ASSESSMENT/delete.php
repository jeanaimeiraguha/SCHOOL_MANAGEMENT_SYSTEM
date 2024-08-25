<?php

include('conn.php');
$Trade_id=$_GET['dlt'];
$delete = mysqli_query($conn, "DELETE FROM  assessment WHERE Trade_id='$Trade_id'");
if ($delete) {
    # code...
    header('location:select.php');
}
exit;

?>