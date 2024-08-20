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
    $Module_code=$_GET['updt'];
    $select=mysqli_query($conn , "SELECT * FROM Modules WHERE Module_code='$Module_code'");
    $row=mysqli_fetch_array($select);

    
    ?>
      <form action="" method="post" class="form was-validated p-5 bg-dark lg-6 my-5">
      

Module_code <input type="text" name="Module_code" value="<?php echo $row['Module_code']?>" class="form-control"> <br>
Module_name <input type="Module_name" name="Module_name"  value="<?php echo $row['Module_name']?>" class="form-control"> <br>
Trade_id <input type="Trade_id" name="Trade_id"  value="<?php echo $row['Trade_id']?>" class="form-control"> <br>
<button name="submit"  class="btn btn-success">Update</button>
</form>
</body>
</html>
<?php
include('conn.php');
if (isset($_POST['submit'])) {

    # code...
    

    $Module_code=$_POST['Module_code'];
    $Module_name=$_POST['Module_name'];
    $Trade_id=$_POST['Trade_id'];
    $update=mysqli_query($conn, "UPDATE Modules SET   Module_code='$Module_code',Module_name='$Module_name', Trade_id='$Trade_id' WHERE Module_code='$Module_code'");
if ($update) {
    # code...
    header('location:select.php');
}
exit;

}

?>