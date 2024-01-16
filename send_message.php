<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$data = json_decode(file_get_contents("php://input"), true);
$user_id = $data['userId'];
$user1=$data['user1'];
$matched_user_id = $data['matchedUserId'];
$message = $data['message'];
$sql = "INSERT INTO messages (user_id, username, matched_user_id, message) VALUES ($user_id, '$user1', $matched_user_id, '$message')";
$result = $conn->query($sql);
echo json_encode(['success' => $result]);
$conn->close();
?>
