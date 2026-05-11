<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "hostel_db"
);

if($conn->connect_error){

    die("Connection Failed");
}

$username = $_POST['username'];

$password = $_POST['password'];

$role = $_POST['role'];

$sql = "INSERT INTO users
(username, password, role)
VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "sss",
    $username,
    $password,
    $role
);

if($stmt->execute()){

    echo "<h1>Registration Successful</h1>";

    echo "User Created Successfully";
}
else{

    echo "<h1>Error</h1>";

    echo $conn->error;
}

$stmt->close();

$conn->close();

?>