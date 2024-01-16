<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_GET['user_id'];
$matched_user_id = $_GET['matched_user_id'];

$sql = "SELECT * FROM messages WHERE (user_id = $user_id AND matched_user_id = $matched_user_id) OR (user_id = $matched_user_id AND matched_user_id = $user_id) ORDER BY timestamp";
$result = $conn->query($sql);

$messages = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $messages[] = array(
            'user1' => $row['username'],
            'message' => $row['message'],
        );
    }
}

echo json_encode($messages);

$conn->close();
?>
