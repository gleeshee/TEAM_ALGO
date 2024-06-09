<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BarangayConnect</title>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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


</body>
</html>