<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json");


include 'db.php';

$data = json_decode(file_get_contents("php://input"));

if (!$data || !isset($data->email) || !isset($data->password)) {
  echo json_encode(["success" => false]);
  exit();
}

$email = $data->email;
$password = $data->password;

$stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
$stmt->bind_param("ss", $email, $password);

$success = $stmt->execute();

echo json_encode(["success" => $success]);
?>
