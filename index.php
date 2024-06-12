<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BarangayConnect - Connecting communities to build a stronger neighborhood.">
    <title>BarangayConnect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        .modal-content {
    box-shadow: 0 8px 16px black, 0 12px 40px white;
    border-radius: 8px;
}
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="#">BarangayConnect</a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Logo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active mx-lg-2" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#" data-bs-toggle="modal" data-bs-target="#aboutModal">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#" data-bs-toggle="modal" data-bs-target="#serviceModal">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#" data-bs-toggle="modal" data-bs-target="#contactModal">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <button class="login_btn" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
</header>

<main>
    <!-- HERO-->
    <section class="hero-section">
        <div class="container d-flex align-items-center justify-content-center fs-1 text-white flex-column">
            <marquee direction="left" scrollamount="10">
                <h1>Welcome, Kabarangay</h1>
            </marquee>
            <p>
                Welcome, Kabarangay! We're thrilled to have you here, where our community spirit thrives. 
                Join us as we work together to create a brighter and stronger neighborhood for everyone.
            </p>
        </div>
    </section>
    <!-- End  -->
</main>

<!-- About -->
<div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="aboutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"style="background-color: black;" >
            <div class="modal-header">
                <h5 class="modal-title" id="aboutModalLabel" style="color: #009970;">About Us</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"style="color: white;">
                <p>
                    BarangayConnect is dedicated to building a stronger community by connecting residents and providing essential services. Our mission is to foster a sense of belonging and support for everyone in our neighborhood.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Service Modal -->
<div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"style="background-color: black;" >
            <div class="modal-header">
                <h5 class="modal-title" id="serviceModalLabel" style="color: #009970;">Our Services</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"style="color: white;">
                <p>
                    We offer a range of services including community events, support programs, and information resources to help residents stay connected and informed. Join us to make a positive impact in our neighborhood.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Contact -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"style="background-color: black;" >
            <div class="modal-header">
                <h5 class="modal-title" id="contactModalLabel" style="color: #009970;">Contact Us</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"style="color: white;">
                <p>
                    Have questions or need assistance? Contact us at info@barangayconnect.com or call +6396478342 We're here to help and look forward to connecting with you.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Login -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="labelform" id="loginModalLabel" style="color: #009970;">Login as:</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="loginTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="admin-tab" data-bs-toggle="tab" data-bs-target="#admin" type="button" role="tab" aria-controls="admin" aria-selected="true">Admin</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="user-tab" data-bs-toggle="tab" data-bs-target="#user" type="button" role="tab" aria-controls="user" aria-selected="false">User</button>
                    </li>
                </ul>
                <div class="tab-content" id="loginTabContent">
                    <div class="tab-pane fade show active" id="admin" role="tabpanel" aria-labelledby="admin-tab">
                        <form method="POST" action="adminlogin.php">
                            <div class="mb-3">
                                <label for="adminEmail" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="adminEmail" name="adminEmail" required>
                            </div>
                            <div class="mb-3">
                                <label for="adminPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="adminPassword" name="adminPassword" required>
                            </div>
                            <button type="submit" class="btn btn-primary" style="background-color: #009970; border-color: darkgreen;">Login as Admin</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="user" role="tabpanel" aria-labelledby="user-tab">
                        <form method="POST" action="login.php">
                            <div class="mb-3">
                                <label for="userEmail" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="userEmail" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="userPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="userPassword" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary" style="background-color: #009970; border-color: darkgreen;">Login as User</button>
                        </form>
                        <div class="text-center mt-3">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#signupModal" data-bs-dismiss="modal">Don't have an account? Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Signup -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel" style="color: #009970;">Sign Up</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="signup.php">
                    <div class="mb-3">
                        <label for="signupFullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="signupFullName" name="full_name" placeholder="Mark John G. Naranjo" required>
                    </div>
                    <div class="mb-3">
                        <label for="signupEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="signupEmail" name="email" placeholder="mark123@gmail.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="signupPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="signupPassword" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="signupConfirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="signupConfirmPassword" required>
                    </div>
                    <button type="submit" class="btn btn-primary" style="background-color: #009970; border-color: darkgreen;">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
