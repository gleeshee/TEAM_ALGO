<?php
include configure.php";

function getStatus FromDatabase ($complaintId) {

global $pdo;

try {

$sql = "SELECT status FROM Complaints WHERE id :complaintId";

$stmt = $pdo->prepare($sql):

$stmt->bindParam("complaintId". $complaintId, PDO:: PARAM_INT); $stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result == false && isset($result['status'])) {

return $result['status']:

} else {

return "Error: Complaint ID not found or status not available."

}

} catch (PDOException $e) {

return "Error: $e->getMessage();
}

}

if ($-SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complaintId']]] {

$complaintId = $_POST['complaintId'];

if (filter_var($complaintId. FILTER_VALIDATE_INT)) {

$status = getStatus FromDatabase($complaintId);

echo "Your complaint status is:" .$status:
} else {

echo "Error: Complaint ID must be an integer.";

}

} else {

echo "Error: Complaint ID is not provided.";

}

?>