<?php
session_start();
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = md5(trim($_POST['password'])); // Hash password dengan MD5

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = $mysqli->query($query);
    
    if ($result->num_rows > 0) {
        $_SESSION['user'] = $username;
        header('Location: dashboard.php');
    } else {
        $_SESSION['pesan'] = "Username atau password Anda salah!";
        header('Location: dashboard.php');
    }
}
?>