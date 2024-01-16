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
$sqlUpdateUserStatus = "UPDATE loc SET status = 'matched' WHERE id IN ($user_id, $matched_user_id)";
$conn->query($sqlUpdateUserStatus);

$conn->close();
?>
