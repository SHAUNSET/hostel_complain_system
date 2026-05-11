<?php

session_start();

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

$stmt->bind_param("sss", $username, $password, $role);

$stmt->execute();

$result = $stmt->get_result();

if($result->num_rows > 0){


    $_SESSION['username'] = $username;
    $_SESSION['role'] = $role;

    if($role == "student"){
        header("Location: student.php");
    }
    else{
        header("Location: admin.php");
    }

}
else{
    echo "Invalid login";
}

?>