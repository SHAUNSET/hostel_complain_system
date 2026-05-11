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

$sql = "SELECT * FROM users
WHERE username = ?
AND password = ?
AND role = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "sss",
    $username,
    $password,
    $role
);

$stmt->execute();

$result = $stmt->get_result();

if($result->num_rows > 0){

    echo "<h1>Login Successful</h1>";

    echo "Welcome " . $username;

    echo "<br>";

    echo "Role : " . $role;
}
else{

    echo "<h1>Invalid Username or Password</h1>";
}

$stmt->close();

$conn->close();

?>