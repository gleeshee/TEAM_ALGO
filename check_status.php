include configure.php";

CHATROOM

function getStatus FromDatabase (ScomplaintId) {

global $pdo;

try {

$sql = "SELECT status FROM Complaints WHERE id :complaintId";

$stmt = $pdo->prepare($sql):

$stmt->bindParam("complaintId". ScomplaintId, PDO:: PARAM INT); $stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result == false && isset($result['status'])) {

return $result['status']:

} else {

return "Error: Complaint ID not found or status not available."

}

} catch (PDOException Se) [

return "Error: Se->getMessage();
}

}