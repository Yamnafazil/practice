<?php
session_start();

include_once 'connection.php';

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['phone_no']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO parents (username, email, phone, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $username, $email, $phone_no, $password);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Registration successful";
        header('Location: index.html');
        exit;
    }
}