<?php
include('conn.php');

$errors = [];
$success_message = '';

if (isset($_POST['submit'])) {
    // Sanitize and validate input
    $Trainee_name = trim($_POST['Trainee_name']);
    $Trainee_phone = trim($_POST['Trainee_phone']);
    $Trainee_Salary = trim($_POST['Trainee_salary']);

    // Validate input
    if (empty($Trainee_name)) {
        $errors[] = 'Trainee name is required.';
    }

    if (empty($Trainee_phone) || !preg_match('/^[0-9]{10}$/', $Trainee_phone)) {
        $errors[] = 'A valid 10-digit phone number is required.';
    }

    if (empty($Trainee_Salary) || !is_numeric($Trainee_Salary)) {
        $errors[] = 'A valid salary is required.';
    }

    if (empty($errors)) {
        // Prepare SQL statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO salary (Trainee_name, Trainee_phone, Trainee_salary) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $Trainee_name, $Trainee_phone, $Trainee_Salary);

        if ($stmt->execute()) {
            $success_message = 'Record added successfully.';
            header('Location: select.php');
            exit();
        } else {
            $errors[] = 'Failed to add record: ' . $stmt->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Trainee</title>
</head>
<body>
    <?php
    // Display success or error messages
    if (!empty($success_message)) {
        echo '<p style="color: green;">' . $success_message . '</p>';
    }

    if (!empty($errors)) {
        echo '<ul style="color: red;">';
        foreach ($errors as $error) {
            echo '<li>' . $error . '</li>';
        }
        echo '</ul>';
    }
    ?>

    <form action="" method="post">
        Trainee Name: <input type="text" name="Trainee_name" value="<?php echo htmlspecialchars($Trainee_name); ?>"> <br>
        Trainee Phone: <input type="text" name="Trainee_phone" value="<?php echo htmlspecialchars($Trainee_phone); ?>"> <br>
        Trainee Salary: <input type="text" name="Trainee_salary" value="<?php echo htmlspecialchars($Trainee_Salary); ?>"> <br>
        <button name="submit">Add New</button>
    </form>
</body>
</html>
