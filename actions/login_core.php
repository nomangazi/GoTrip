<?php

require_once "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = inputCheck($_POST["email"]);
    $password = md5(inputCheck($_POST["password"]));

    $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";

    $getUsers = $conn->query($sql);
    $user = mysqli_fetch_array($getUsers);

    if ($user) {
        session_start();

        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['email'] = $user['email'];

        header("Location: /gotrip");
    } else {
        header("Location: /gotrip/user/login.php?Email or Password is incorrect");
    }
}

// Remove Special Character
function inputCheck($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
