<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "barangayconnect";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BarangayConnect - Connecting communities to build a stronger neighborhood.">
    <title>BarangayConnect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
href="style.css">

    <style >
        .modal-body-profile {
    margin-top: 200px;
    position: absolute;
    flex: 1 1 auto;
    padding: var(--bs-modal-padding);
}
      
    ::-webkit-scrollbar {
        width: 10px; 
    }
    ::-webkit-scrollbar-track {
        background-color: cornsilk;
    }
    ::-webkit-scrollbar-thumb {
        background-color: white; 
        border-radius: 10px; 
    }
 
.modal-content {
        overflow-y: auto; 
    }
       .table {
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table th, .table td {
            color: black;
            background-color: #ffb6c1;
            border: 1px solid #dee2e6;
            padding: 12px;
            text-align: left;
        }

    .table th {
            background-color: #ffb6c1;
        }

        .table img {
            max-width: 100px;
            max-height: 100px;
            border-radius: 0;
        }
        .modal-content {
        box-shadow: 0 8px 32px black, 0 12px 64px black;
        border-radius: 8px;
    }

    .hero-sec{
    background: url('img/adminn.jpg') no-repeat center;
    background-size: cover;
    width: 100%;
    position: relative;
   }
.hero-sec:before {
    background-color: rgba(0, 0, 0, 0.6);
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}
.hero-sec .container {
    height: 100vh;
    z-index: 1;
    position: relative;
}



    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg fixed-top" style="padding: 20px; background-color:#DCDCDC;">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="index.php" style="color:#ff1493;">BarangayConnect</a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Admin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
<div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3" style="color: white;">
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#" data-bs-toggle="modal" data-bs-target="#postAnnouncementsModal">Post Announcements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#" data-bs-toggle="modal" data-bs-target="#complainsModal">Complains</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#" data-bs-toggle="modal" data-bs-target="#medicinesSupplyModal">Medicines Supply</a>
                        </li>
                        <li class="nav-item">
                         <a class="nav-link mx-lg-2" href="#" data-bs-toggle="modal" data-bs-target="#userProfileModal">Users Profile</a>

                        </li>
                    </ul>
 


                </div>
            </div>
<button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
</header>

<main>
    <!--Hero -->
    <section class="hero-sec">
        <div class="container d-flex align-items-center justify-content-center fs-1 text-white flex-column">
        </div>
    </section>
    <!--End -->
</main>
<!-- Post Announcements  -->
<div class="modal fade" id="postAnnouncementsModal" tabindex="-1" aria-labelledby="postAnnouncementsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mt-5" >
        <div class="modal-content"style="background-color:#FAF0E6;">
            <div class="modal-header">
                <h5 class="modal-title" id="postAnnouncementsModalLabel">Post Announcements</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="announcements.php">
                    <div class="mb-3">
                        <label 
for="announcementDetails" class="form-label">Details/Description</label>
                        <textarea class="form-control" id="announcementDetails" name="details" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Post</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Complains  -->
<div class="modal fade" id="complainsModal" tabindex="-1" aria-labelledby="complainsModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered mt-5">
        <div class="modal-content" style="background-color:#FAF0E6;">
            <div class="modal-header">
                <h5 class="modal-title" id="complainsModalLabel">Complains</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe id="complaintFrame" src="about:blank" style="width: 100%; height: 300px; border: none;"></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" onclick="updateComplaintStatus('declined')">Decline</button>
                <button type="button" class="btn btn-success" onclick="updateComplaintStatus('accepted')">Accept</button>
                <button type="button" class="btn btn-primary" id="nextButton">Next</button>
            </div>
        </div>
    </div>
</div>

<script>
let currentComplaintIndex = 0;
let complaints = [];

function loadComplaints() {
    fetch('retrieve_complaints.php')
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                alert(data.error);
            } else {
                complaints = data;
                displayComplaint();
            }
        });
}
