<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Trainer</title>
    <style>
        body {
            background-color: #e9f7f9; /* Light cyan background */
        }

        .container {
            margin-top: 30px;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 2rem;
        }

        .card-title {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .btn-primary {
            background-color: #007BFF;
            border-color: #007BFF;
            border-radius: 0.25rem;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004080;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 0.25rem;
        }

        .invalid-feedback {
            display: block;
        }

        .needs-validation .form-control:invalid {
            border-color: #dc3545;
            padding-right: calc(1.5em + .75rem);
            background-image: none;
        }

        .needs-validation .form-control:valid {
            border-color: #28a745;
            padding-right: calc(1.5em + .75rem);
            background-image: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">Add New Trainer</h4>
                        <form action="" method="post" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="Trainer_id" class="form-label">Trainer ID</label>
                                <input type="text" name="Trainer_id" class="form-control" id="Trainer_id" placeholder="Enter Trainer ID" required>
                                <div class="invalid-feedback">
                                    Please provide a Trainer ID.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="User_id" class="form-label">User ID</label>
                                <input type="text" name="User_id" class="form-control" id="User_id" placeholder="Enter User ID" required>
                                <div class="invalid-feedback">
                                    Please provide a User ID.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="Trade_id" class="form-label">Trade ID</label>
                                <input type="text" name="Trade_id" class="form-control" id="Trade_id" placeholder="Enter Trade ID" required>
                                <div class="invalid-feedback">
                                    Please provide a Trade ID.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="Trainer_name" class="form-label">Trainer Name</label>
                                <input type="text" name="Trainer_name" class="form-control" id="Trainer_name" placeholder="Enter Trainer Name" required>
                                <div class="invalid-feedback">
                                    Please provide a Trainer Name.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="Trainer_age" class="form-label">Trainer Age</label>
                                <input type="text" name="Trainer_age" class="form-control" id="Trainer_age" placeholder="Enter Trainer Age" required>
                                <div class="invalid-feedback">
                                    Please provide a Trainer Age.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="Phone_number" class="form-label">Phone Number</label>
                                <input type="text" name="Phone_number" class="form-control" id="Phone_number" placeholder="Enter Phone Number" required>
                                <div class="invalid-feedback">
                                    Please provide a Phone Number.
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary w-100">Add New</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        // Example of client-side validation using JavaScript
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>
</html>
