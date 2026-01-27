<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smart Health Prediction</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            font-family: Arial, sans-serif;
        }
        .hero{
            padding: 70px 0;
        }
        .hero h1{
            font-weight: bold;
        }
        .step-box{
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 15px;
            text-align: center;
            background: #fff;
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
        <a class="navbar-brand fw-bold" href="#">Smart Health</a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link " href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="doctor/doctors.php">Doctors</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>


<section class="hero">
    <div class="container">
        <div class="row align-items-center">

        
            <div class="col-md-6">
                <h1>Smart Health Prediction System</h1>
                <p class="text-muted">
                    Select symptoms and get instant health guidance.
                </p>
                <a href="login.php" class="btn btn-primary mt-3">
                    Get Started
                </a>
            </div>

            
            <div class="col-md-6 text-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbpLgGci0ritF9Zkqu6BVDSSeNms0vpAnyUQ&s" class="img-fluid" width="320">
            </div>

        </div>
    </div>
</section>


<section class="py-5 bg-light">
    <div class="container">
        <h3 class="text-center mb-4">How It Works</h3>

        <div class="row">
            <div class="col-md-4">
                <div class="step-box">
                    <h6 class="text-primary">Step 1</h6>
                    <p>Register & Login</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="step-box">
                    <h6 class="text-primary">Step 2</h6>
                    <p>Select Symptoms</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="step-box">
                    <h6 class="text-primary">Step 3</h6>
                    <p>View Result</p>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="text-center">
    <div class="container">
        <p class="mb-0">
            Smart Health Prediction System <br>
            © Reserved by Santosh Kumar
        </p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>