<?php

$conn = new mysqli(
    "localhost",
    "root",
    "YOUR_DB_PASSWORD",
    "hostel_db"
);

if($conn->connect_error){

    die("Connection Failed");
}

$username = $_POST['username'];

$password = $_POST['password'];

$role = "student";

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

    header("Location: index.php");
}
else{

    echo "<h1>Error</h1>";

    echo $conn->error;
}

$stmt->close();

$conn->close();

?>