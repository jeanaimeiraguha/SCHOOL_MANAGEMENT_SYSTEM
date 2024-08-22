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
    $User_id=$_GET['updt'];
    $select=mysqli_query($conn , "SELECT * FROM users WHERE User_id='$User_id'");
    $row=mysqli_fetch_array($select);

    
    ?>
      <form action="" method="post" class="form was-validated bg-dark p-5 lg-6 container my-5">
      

User Username<input type="text" name="User_name" value="<?php echo $row['User_name']?>" class="form-control" placeholder="Enter Username"> <br>
User password<input type="password" name="User_password"  value="<?php echo $row['User_password']?>" class="form-control" placeholder="Enter Password"> <br>
<button name="submit" class="btn btn-success">Update</button>
</form>
</body>
</html>
<?php
include('conn.php');
if (isset($_POST['submit'])) {

    # code...
    

    $User_name=$_POST['User_name'];
    $User_password=$_POST['User_password'];
    $update=mysqli_query($conn, "UPDATE users SET   User_name='$User_name',User_password='$User_password' WHERE User_id='$User_id'");
if ($update) {
    # code...
    header('location:select.php');
}
exit;

}

?>