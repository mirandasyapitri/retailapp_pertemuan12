<?php
include "koneksi.php";
$query = "SELECT * FROM user";
$result = $mysqli->query($query);

if ($result->num_rows == 0) {
    $username = "miranda";
    $nama_lengkap = "Miranda Syapitri";
    $password = md5('123');
    $level = "user";

    $query = "INSERT INTO user (username, nama_lengkap, password, level) 
              VALUES ('$username', '$nama_lengkap', '$password', '$level')";
    if ($mysqli->query($query)) {
        echo "User berhasil ditambahkan.";
    } else {
        echo "Error: " . $mysqli->error;
    }
}