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

$id = $_GET['id'];

$sql = "UPDATE complaints
SET status = 'Resolved'
WHERE id = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("i", $id);

if($stmt->execute()){

    header("Location: admin.php");
}
else{

    echo "Error updating status";
}

$stmt->close();

$conn->close();

?>