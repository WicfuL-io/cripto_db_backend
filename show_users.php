<?php
include 'db.php';
header("Content-Type: application/json");

$sql = "SELECT id, email FROM users";
$result = $conn->query($sql);

$users = [];
while ($row = $result->fetch_assoc()) {
    $users[] = $row;
}

echo json_encode(["success" => true, "users" => $users]);
?>
