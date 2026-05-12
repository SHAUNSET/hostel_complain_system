<?php
session_start();
?>

<!DOCTYPE html>

<html>

<head>

<title>Student Dashboard</title>

<link rel="stylesheet" href="style.css">

<style>

.dashboard{

    width:500px;

    background:white;

    padding:30px;

    border-radius:15px;

    box-shadow:0px 0px 15px rgba(0,0,0,0.2);

    text-align:center;
}

.dashboard h1{

    margin-bottom:30px;
}

.dashboard a{

    display:block;

    margin-top:20px;

    text-decoration:none;

    background:#4CAF50;

    color:white;

    padding:12px;

    border-radius:8px;

    font-weight:bold;

    transition:0.3s;
}

.dashboard a:hover{

    background:#45a049;
}

</style>

</head>

<body>

<div class="dashboard">

<h1>
Welcome <?php echo $_SESSION['username']; ?>
</h1>

<a href="complaint.php">

Submit Complaint

</a>

<a href="my_complaints.php">

View My Complaints

</a>

<a href="logout.php">

Logout

</a>

</div>

</body>

</html>