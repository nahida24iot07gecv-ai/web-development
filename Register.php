<?php


if (isset($_POST['register'])) {
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $pass   = $_POST['password'];
    $cpass  = $_POST['cpassword'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];

    if ($pass != $cpass) {
        echo "<script>alert('Passwords do not match');</script>";
    } else {
        mysqli_query($conn,
            "INSERT INTO users(name,email,password)
             VALUES('$name','$email','$pass')"
        );
        echo "<script>alert('Registration Successful'); window.location='../login.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f5f7fa;
        }
        .register-box{
            width: 380px;
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        footer{
            background:#222;
            color:#fff;
            padding:15px 0;
        }
    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="../index.php">Smart Health</a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link active" href="#">Register</a></li>
            <li class="nav-item"><a class="nav-link" href="../login.php">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="../doctor/doctors.php">Doctors</a></li>
            <li class="nav-item"><a class="nav-link" href="../contact.php">Contact</a></li>
        </ul>
    </div>
</nav>


<div class="container d-flex justify-content-center align-items-center" style="min-height:80vh;">
    <div class="register-box">

        <h4 class="text-center mb-4">User Registration</h4>

        <form method="post">
            <input type="text" name="name" class="form-control mb-2" placeholder="Full Name" required>

            <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>

            <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>

            <input type="password" name="cpassword" class="form-control mb-2" placeholder="Confirm Password" required>

            <select name="gender" class="form-control mb-2" required>
                <option value="">Choose Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
            </select>

            <input type="text" name="mobile" class="form-control mb-3" placeholder="Mobile Number" required>

            <button name="register" class="btn btn-primary w-100">
                Register
            </button>
        </form>

    </div>
</div>


<footer class="text-center">
    <p class="mb-0">
        Smart Health Prediction System <br>
        © Reserved by Santosh Kumar
    </p>
</footer>

</body>
</html>