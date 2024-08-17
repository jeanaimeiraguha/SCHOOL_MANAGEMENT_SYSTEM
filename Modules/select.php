<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: skyblue;">
<a href="insert.php" class="btn btn-primary">Add New</a>
    <table border="1" class="table table-bordered table-stripped table-hover container">

    <tr>
        <th>Module_code</th>
        <th>Module_name</th>
        <th>Trade_id</th>
        <th colspan="2">Operations</th>
    </tr>
    <?php
    include("conn.php");
    $select=mysqli_query($conn, "SELECT * FROM modules");
    while($row=mysqli_fetch_array($select)){    
    ?>
    <tr>
        <td><?php echo $row['Module_code']?></td>
        
        <td><?php echo $row['Module_name']?></td>
        <td><?php echo $row['Trade_id']?></td>
        <td><a href="delete.php?dlt=<?php echo $row['Module_code']?>" class="btn btn-danger">Delete</a></td>
        <td><a href="update.php?updt=<?php echo $row['Module_code']?>" class="btn btn-success">Update</a></td>
    </tr>
    <?php
    
    }?>
    </table>
</body>
</html>