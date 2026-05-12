<?php

session_start();

if(isset($_SESSION['username'])){

    if($_SESSION['role'] == "student"){

        header("Location: student.php");
    }
    else if($_SESSION['role'] == "admin"){

        header("Location: admin.php");
    }
}

?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Login</title>

<link rel="stylesheet" href="style.css">

<style>

body{

    font-family:Arial, sans-serif;

    background:linear-gradient(to right,
    #74ebd5,
    #ACB6E5);

    display:flex;

    justify-content:center;

    align-items:center;

    height:100vh;
}

.login-box{

    background:white;

    width:350px;

    padding:30px;

    border-radius:15px;

    box-shadow:0px 0px 15px rgba(0,0,0,0.2);
}

.login-box h1{

    text-align:center;

    margin-bottom:25px;
}

input, select{

    width:100%;

    padding:12px;

    margin-top:10px;

    margin-bottom:20px;

    border:1px solid #ccc;

    border-radius:8px;

    font-size:16px;
}

button{

    width:100%;

    padding:12px;

    background:#4CAF50;

    color:white;

    border:none;

    border-radius:8px;

    font-size:16px;

    cursor:pointer;
}

button:hover{

    background:#45a049;
}

.register-link{

    text-align:center;

    margin-top:20px;
}

.register-link a{

    text-decoration:none;

    color:#007bff;
}

</style>

</head>

<body>

<div class="login-box">

<h1>Login</h1>

<form action="login.php" method="POST">

<input type="text"
name="username"
placeholder="Enter Username"
required>

<input type="password"
name="password"
placeholder="Enter Password"
required>

<select name="role" required>

<option value="">
Select Role
</option>

<option value="student">
Student
</option>

<option value="admin">
Admin
</option>

</select>

<button type="submit">

Login

</button>

</form>

<div class="register-link">

<p>
Don't have an account?
<a href="register.html">

Register

</a>
</p>

</div>

</div>

</body>

</html>