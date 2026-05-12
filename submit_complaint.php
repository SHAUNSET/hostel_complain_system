<?php

session_start();

$conn = new mysqli(
    "localhost",
    "root",
    "YOUR_DB_PASSWORD",
    "hostel_db"
);

if($conn->connect_error){
    die("Connection Failed");
}

$username = $_SESSION['username'];

$complaint = $_POST['complaint'];

$sql = "INSERT INTO complaints (username, complaint)
VALUES (?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ss", $username, $complaint);

if($stmt->execute()){

    echo "

    <script>

    alert('Complaint Submitted Successfully');

    window.location.href='student.php';

    </script>

    ";
}
else{

    echo "Error: " . $conn->error;
}

?>