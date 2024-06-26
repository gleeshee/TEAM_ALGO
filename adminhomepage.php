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
function displayComplaint() {
    if (currentComplaintIndex < complaints.length) {
        const complaint = complaints[currentComplaintIndex];
        const complaintFrameDoc = document.getElementById('complaintFrame').contentDocument;
        complaintFrameDoc.body.innerHTML = `
            <p><strong>Name:</strong> ${complaint.name}</p>
            <p><strong>Address:</strong> ${complaint.address}</p>
            <p><strong>Title:</strong> ${complaint.title}</p>
            <p><strong>Description:</strong> ${complaint.description}</p>
        `;
    } else {
        document.getElementById('complaintFrame').contentDocument.body.innerHTML = "<p>No more complaints.</p>";
    }
}
function updateComplaintStatus(status) {
    if (currentComplaintIndex < complaints.length) {
        const complaint = complaints[currentComplaintIndex];
        fetch('update_complaint_status.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ complaintId: complaint.complaint_id, status: status })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(`Complaint has been ${status}.`);
                nextComplaint();
            } else {
                alert('Failed to update status: ' + data.message);
            }
        });
    }
}
function nextComplaint() {
    currentComplaintIndex++;
    displayComplaint();
}

document.getElementById('nextButton').addEventListener('click', nextComplaint);

document.addEventListener('DOMContentLoaded', loadComplaints);
</script>

<!-- User Profile Modal -->
<!-- User Profile Modal -->
<div class="modal fade" id="userProfileModal" tabindex="-1" aria-labelledby="userProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-body"  style="background-color: rgba(255, 182, 193, 0.5);">
                <div class="table-responsive">

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
                        <label for="announcementTitle" class="form-label">Title</label>
                        <input type="text" class="form-control" id="announcementTitle" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="announcementDetails" class="form-label">Details/Description</label>
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

function displayComplaint() {
    if (currentComplaintIndex < complaints.length) {
        const complaint = complaints[currentComplaintIndex];
        const complaintFrameDoc = document.getElementById('complaintFrame').contentDocument;
        complaintFrameDoc.body.innerHTML = `
            <p><strong>Name:</strong> ${complaint.name}</p>
            <p><strong>Address:</strong> ${complaint.address}</p>
            <p><strong>Title:</strong> ${complaint.title}</p>
            <p><strong>Description:</strong> ${complaint.description}</p>
        `;
    } else {
        document.getElementById('complaintFrame').contentDocument.body.innerHTML = "<p>No more complaints.</p>";
    }
}

function updateComplaintStatus(status) {
    if (currentComplaintIndex < complaints.length) {
        const complaint = complaints[currentComplaintIndex];
        fetch('update_complaint_status.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ complaintId: complaint.complaint_id, status: status })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(`Complaint has been ${status}.`);
                nextComplaint();
            } else {
                alert('Failed to update status: ' + data.message);
            }
        });
    }
}

function nextComplaint() {
    currentComplaintIndex++;
    displayComplaint();
}

document.getElementById('nextButton').addEventListener('click', nextComplaint);

document.addEventListener('DOMContentLoaded', loadComplaints);
</script>

<!-- User Profile Modal -->
<!-- User Profile Modal -->
<div class="modal fade" id="userProfileModal" tabindex="-1" aria-labelledby="userProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-body"  style="background-color: rgba(255, 182, 193, 0.5);">
                <div class="table-responsive">
                    <?php
                  
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "barangayconnect";

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT id, name, email, address, photo FROM userprofile ORDER BY id ASC";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        echo "<table class='table' style='background-color: #000080; color: white; border: 1px solid white;'>";
                        echo "<thead style='color: white;'><tr><th>ID</th><th>Name</th><th>Email</th><th>Address</th><th>Photo</th><th>Action</th></tr></thead>";
                        echo "<tbody>";
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr id='userProfileRow_" . $row["id"] . "' style='border: 1px solid white;'>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "<td>" . $row["address"] . "</td>";
echo "<td><img src='data:image/jpeg;base64," . base64_encode($row["photo"]) . "' alt='User Photo' style='width:100px;height:100px;'></td>";
                            echo "<td><button class='btn btn-danger btn-sm' onclick='deleteUserProfile(" . $row["id"] . ")'><i class='bi bi-trash'></i></button></td>"; 
                            echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                    } else {
                        echo "No user profiles found.";
                    }

               
                    mysqli_close($conn);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function deleteUserProfile(id) {
    if (confirm("Are you sure you want to delete this user profile?")) {
        fetch(`delete_user_profile.php?id=${id}`, {
            method: 'GET'
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
            
                document.getElementById(`userProfileRow_${id}`).remove();
            } else {
                alert("Failed to delete the user profile.");
            }
        })
        .catch(error => {
            console.error("Error:", error);
            alert("An error occurred while deleting the user profile.");
        });
    }
}
</script>

<!-- Medicines Supply  -->
<div class="modal fade" id="medicinesSupplyModal" tabindex="-1" aria-labelledby="medicinesSupplyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mt-5">
        <div class="modal-content"style="background-color:#FAF0E6;">
            <div class="modal-header">
                <h5 class="modal-title" id="medicinesSupplyModalLabel">Medicines Supply</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="MedicinesUpdate.php">
                    <div class="mb-3">
                        <label for="medicineName" class="form-label">Medicine Name</label>
                        <input type="text" class="form-control" id="medicineName" name="name">
                    </div>
     <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" min="0">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html> 