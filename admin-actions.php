<?php

$defaultAdminUsername = "admin";
$defaultAdminPassword = "admin";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $defaultAdminUsername && $password == $defaultAdminPassword) {

        header('Location: ../views/admin-dashboard.php');
        exit();
            }else{
        echo "Invalid username or password!";
    }
}
?>
