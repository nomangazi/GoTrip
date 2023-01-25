<?php
require_once "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = inputCheck($_POST['name']);
    $img_url = "/uploads/" . time() . ".jpg";
    $email = inputCheck($_POST['email']);
    $contactNumber = inputCheck($_POST['contact_number']);
    $address = inputCheck($_POST['address']);
    $password = md5(inputCheck($_POST['password']));

    $sqlEmail = "SELECT * FROM `users` WHERE `email` = '$email'";

    $queryEmail = mysqli_query($conn, $sqlEmail);

    if (mysqli_num_rows($queryEmail) == 0) {
        $sqlDataInsert = "INSERT INTO `users`(`name`, `img_url`,`email`, `contact_number`, `address`, `password`) VALUES ('$name','$img_url', '$email', '$contactNumber', '$address', '$password')";

        if ($conn->query($sqlDataInsert) === TRUE) {
            if ($name != '' && $img_url != '' && $email != '' && $contactNumber != '' && $address != '' && $password != '') {
                header("Location: /gotrip/user/login.php?m=Registration Successful");
            } else {
                header("Location: /gotrip/user/signin.php?m=Registration Failed");
            }
        }
    } else {
        header("Location: /gotrip/user/signin.php?m=Email already exists");
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
