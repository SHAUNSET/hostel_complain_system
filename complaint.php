<?php
session_start();
?>

<!DOCTYPE html>

<html>

<head>

<title>Submit Complaint</title>

<style>

body{

    font-family:Arial, sans-serif;

    background:linear-gradient(
        to right,
        #74ebd5,
        #ACB6E5
    );

    display:flex;

    justify-content:center;

    align-items:center;

    height:100vh;

    margin:0;
}

.container{

    width:400px;

    background:white;

    padding:30px;

    border-radius:15px;

    box-shadow:0px 0px 15px rgba(0,0,0,0.2);
}

h1{

    text-align:center;

    margin-bottom:10px;
}

h3{

    text-align:center;

    color:#555;

    margin-bottom:25px;
}

label{

    font-weight:bold;
}

textarea{

    width:100%;

    height:120px;

    margin-top:10px;

    margin-bottom:20px;

    padding:10px;

    border:1px solid #ccc;

    border-radius:8px;

    resize:none;

    box-sizing:border-box;

    font-size:15px;
}

button{

    width:100%;

    padding:12px;

    border:none;

    border-radius:8px;

    background:#4CAF50;

    color:white;

    font-size:16px;

    cursor:pointer;

    transition:0.3s;
}

button:hover{

    background:#45a049;
}

.back-btn{

    display:block;

    text-align:center;

    margin-top:20px;

    text-decoration:none;

    background:#007bff;

    color:white;

    padding:12px;

    border-radius:8px;

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

Submit Complaint

</h1>

<h3>

Welcome <?php echo $_SESSION['username']; ?>

</h3>

<form action="submit_complaint.php" method="POST">

<label>

Complaint

</label>

<textarea
name="complaint"
placeholder="Enter your complaint here..."
required>

</textarea>

<button type="submit">

Submit Complaint

</button>

</form>

<a class="back-btn" href="student.php">

← Back to Dashboard

</a>

</div>

</body>

</html>