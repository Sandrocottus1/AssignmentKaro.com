<?php
    $username1=$_POST['username1'];
    $email1=$_POST['email1'];
    $password_11=$_POST['password_11'];
    $password_22=$_POST['password_22'];
    $conn=mysqli_connect('localhost','root','','users');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        if($password_11===$password_22){
        $stmt = $conn->prepare("insert into loc(username1,email1,password_11,password_22)
            values(?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username1, $email1, $password_11, $password_22);
        $stmt->execute();
        $_SESSION['username']=$username1;
        header("Location: location.php");
        $stmt->close();
        $conn->close();
    }
else{
    echo "wrong password combinations!!";
}}
?>

