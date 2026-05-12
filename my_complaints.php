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

$sql = "SELECT * FROM complaints
WHERE username = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("s", $username);

$stmt->execute();

$result = $stmt->get_result();

?>

<!DOCTYPE html>

<html>

<head>

<title>My Complaints</title>

<style>

body{

    font-family:Arial, sans-serif;

    background:linear-gradient(
        to right,
        #74ebd5,
        #ACB6E5
    );

    margin:0;

    padding:0;
}

.container{

    width:90%;

    max-width:1000px;

    margin:50px auto;

    background:white;

    padding:30px;

    border-radius:15px;

    box-shadow:0px 0px 15px rgba(0,0,0,0.2);
}

h1{

    text-align:center;

    margin-bottom:30px;
}

table{

    width:100%;

    border-collapse:collapse;
}

th, td{

    padding:15px;

    border:1px solid #ddd;

    text-align:center;
}

th{

    background:#4CAF50;

    color:white;
}

tr:nth-child(even){

    background:#f2f2f2;
}

.pending{

    color:orange;

    font-weight:bold;
}

.resolved{

    color:green;

    font-weight:bold;
}

.back-btn{

    display:inline-block;

    margin-top:25px;

    background:#007bff;

    color:white;

    padding:10px 20px;

    border-radius:8px;

    text-decoration:none;

    font-weight:bold;
}

.back-btn:hover{

    background:#0056b3;
}

</style>

</head>

<body>

<div class="container">

<h1>

My Complaints

</h1>

<table>

<tr>

<th>ID</th>
<th>Complaint</th>
<th>Status</th>
<th>Date</th>

</tr>

<?php

while($row = $result->fetch_assoc()){

    echo "<tr>";

    echo "<td>".$row['id']."</td>";

    echo "<td>".$row['complaint']."</td>";

    if($row['status'] == "Pending"){

        echo "<td class='pending'>Pending</td>";
    }
    else{

        echo "<td class='resolved'>Resolved</td>";
    }

    echo "<td>".$row['created_at']."</td>";

    echo "</tr>";
}

?>

</table>

<a class="back-btn" href="student.php">

← Back to Dashboard

</a>

</div>

</body>

</html>