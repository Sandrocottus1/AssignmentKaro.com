<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$senderID = $_POST['sender_id'];
$receiverID = $_POST['receiver_id'];
$sql = "SELECT * FROM messages WHERE (user_id = '$senderID' AND matched_user_id = '$receiverID') OR (sender_id = '$receiverID' AND receiver_id = '$senderID') ORDER BY id ASC";
$result = $conn->query($sql);
$messages = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $messages[] = $row;
  }
}
echo json_encode($messages);
$conn->close();
?>
