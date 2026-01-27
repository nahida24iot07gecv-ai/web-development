<?php
// PHP logic to handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // For demonstration: simple check
    if (!empty($email) && !empty($password)) {
        // You would typically check these against a database
        echo "<script>alert('Attempting login for: " . htmlspecialchars($email) . "');</script>";
    } else {
        echo "<script>alert('Please fill in all fields');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Health - User Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        /* Navbar Styling */
        .navbar-custom {
            background-color: #1a5276; /* Dark Blue from image */
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
        /* Login Card Styling */
        .login-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            width: 100%;
            max-width: 450px;
            padding: 30px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .login-card h2 {
            text-align: center;
            margin-bottom: 25px;
            font-weight: 500;
            color: #333;
        }
        .btn-login {
            background-color: #238e52; /* Green from image */
            border: none;
            color: white;
            padding: 10px;
            width: 100%;
        }
        .btn-login:hover {
            background-color: #1e7a46;
        }
        /* Footer Styling */
        footer {
            background-color: #212529; /* Dark Gray/Black */
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">Smart Health</a>
            <div class="ms-auto">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link " href="../index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="../register.php">Register</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="../doctor/doctors.php">Doctors</a></li>
                <li class="nav-item"><a class="nav-link" href="../contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="login-container">
        <div class="login-card">
            <h2>User Login</h2>
            <form action="" method="POST">
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-login">Login</button>
            </form>
        </div>
    </div>

    <footer>
        <div class="container">
            <p class="mb-1">Smart Health Prediction System</p>
            <small>&copy; Reserved By Santosh Kumar</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>