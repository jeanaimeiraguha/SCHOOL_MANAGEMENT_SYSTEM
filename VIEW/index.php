<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            padding-top: 56px; /* Adjust padding to prevent content from hiding under fixed navbar */
        }

        .navbar {
            margin-bottom: 20px;
        }

        .navbar-nav .nav-link {
            color: #fff;
            transition: color 0.2s;
        }

        .navbar-nav .nav-link:hover {
            color: #d4d4d4;
        }

        .jumbotron {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 2rem;
            text-align: center;
        }

        .jumbotron h1 {
            font-size: 2.5rem;
            color: #343a40;
        }

        .jumbotron p {
            font-size: 1.2rem;
            color: #6c757d;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .btn-success:focus, .btn-success.focus {
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
        }

        hr.my-4 {
            border-top: 2px solid #28a745;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../Users/select.php">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../TRAINEE/select.php">Trainee</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Modules/select.php">Modules</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../TRAINER/select.php">Trainer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../ASSESSMENT/select.php">Assessment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../SALARYMN/select.php">Salary</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to IRAGUHA'S SCHOOL MANAGEMENT SYSTEM</h1>
            <hr class="my-4 mb-3">
            <p>Click the button below to read more about the system.</p>
            <a class="btn btn-success btn-lg" href="#" role="button">Read More</a>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
