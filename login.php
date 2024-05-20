<?php
session_start();

include_once 'connection.php';

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM parents WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if ($row && password_verify($password, $row['password']) && $row['username'] == $username) {
        $_SESSION['loggedin'] = true;
        $_SESSION['name'] = $row['email'];
        header('Location: profile.php');
        exit;
    } else {
        echo "Invalid username, email or password";
    }
}