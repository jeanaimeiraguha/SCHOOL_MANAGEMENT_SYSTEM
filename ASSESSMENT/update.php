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
    //$Module_code=$_GET['updt'];
    $Trade_id=$_GET['updt'];
    $select=mysqli_query($conn , "SELECT * FROM assessment WHERE Trade_id='$Trade_id'");
    $row=mysqli_fetch_array($select);

    
    ?>
      <form action="" method="post" class="form was-validated p-5 bg-dark lg-6 my-5">
      Trainer id <input type="number" name="Trainer_id" value="<?php echo $row['Trainer_id']?>" class="form-control" placeholder="enter Trainer_id"> <br>
      module id <input type="number" name="module_id"  value="<?php echo $row['module_id']?>" class="form-control" placeholder="enter Module id"> <br>
    Trade id <input type="number" name="Trade_id"  value="<?php echo $row['Trade_id']?>" class="form-control" placeholder="enter Module id"> <br>
Asessment date <input type="date" name="Asessment_date"  value="<?php echo $row['Asessment_date']?>" class="form-control" placeholder="enter asessment date"> <br>
assessment_name <input type="text" name="assessment_name"  value="<?php echo $row['assessment_name']?>" class="form-control" placeholder="enter  assessment_name"> <br>
<button name="submit"  class="btn btn-success">Update</button>
</form>
</body>
</html>
<?php
include('conn.php');
if (isset($_POST['submit'])) {

    # code...
    

    $Trainer_id=$_POST['Trainer_id'];
    $module_id=$_POST['module_id'];
    $Trade_id=$_POST['Trade_id'];
    //$Trade_id=$_POST['Trade_id'];
    $Asessment_date=$_POST['Asessment_date'];
    $assessment_name= $_POST['assessment_name'];
    $update=mysqli_query($conn, "UPDATE assessment SET   Trainer_id='$Trainer_id',module_id='$module_id', Trade_id='$Trade_id',Asessment_date='$Asessment_date',  assessment_name='$assessment_name'  WHERE Trade_id='$Trade_id'");
if ($update) {
    # code...
    header('location:select.php');
}
exit;

}

?>