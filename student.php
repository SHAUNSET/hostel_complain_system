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

    margin-bottom:20px;
}

.dashboard a{

    display:inline-block;

    margin-top:20px;

    text-decoration:none;

    background:#4CAF50;

    color:white;

    padding:10px 20px;

    border-radius:8px;
}

</style>

</head>

<body>

<div class="dashboard">

<h1>Welcome <?php echo $_SESSION['username']; ?></h1>

<p>
Student Portal
</p>

<a href="login.html">

Logout

</a>

</div>

</body>

</html>