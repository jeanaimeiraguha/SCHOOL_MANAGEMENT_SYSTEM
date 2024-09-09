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
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <?php
        // Display success or error messages
        if (!empty($success_message)) {
            echo '<div class="alert alert-success" role="alert">' . $success_message . '</div>';
        }

        if (!empty($errors)) {
            echo '<div class="alert alert-danger" role="alert">';
            foreach ($errors as $error) {
                echo '<p>' . $error . '</p>';
            }
            echo '</div>';
        }
        ?>

        <div class="card">
            <div class="card-header">
                <h4>Add New Trainee</h4>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="Trainee_name">Trainee Name</label>
                        <input type="text" class="form-control" id="Trainee_name" name="Trainee_name" value="<?php echo htmlspecialchars($Trainee_name); ?>">
                    </div>
                    <div class="form-group">
                        <label for="Trainee_phone">Trainee Phone</label>
                        <input type="text" class="form-control" id="Trainee_phone" name="Trainee_phone" value="<?php echo htmlspecialchars($Trainee_phone); ?>">
                    </div>
                    <div class="form-group">
                        <label for="Trainee_salary">Trainee Salary</label>
                        <input type="text" class="form-control" id="Trainee_salary" name="Trainee_salary" value="<?php echo htmlspecialchars($Trainee_Salary); ?>">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Add New</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
