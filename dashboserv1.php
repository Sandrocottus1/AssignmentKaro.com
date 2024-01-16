<?php 
session_start();
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "users";
        $conn = mysqli_connect($hostname, $username, $password, $database);
        if (!$conn) {
            die("Database connection failed: " . mysqli_connect_error());
        }
        $id=$_SESSION['id'];
        $sql="SELECT id,username1,musername,status FROM loc WHERE id=$id";
        $result = $conn->query($sql);
        $data=array();
        while ($row=$result->fetch_assoc()) {
            $data[]=$row;
        }
        echo json_encode($data);
        $conn->close();
      ?>
      