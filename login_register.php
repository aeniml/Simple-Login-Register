<?php

session_start();
require_once 'config.php';

if (isset($_POST['register'])) {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $role = $_POST['role'] ?? '';

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check for duplicate email
    $checkEmail = $conn->query("SELECT email FROM users WHERE email = '$email'");
    if ($checkEmail->num_rows > 0) {
        $_SESSION['register_error'] = 'Email is already registered!';
        $_SESSION['active_form'] = 'register';
    } else {
        // Insert into database
        $sql = "INSERT INTO users (name, email, password, role) VALUES ('$name','$email','$hashedPassword','$role')";
        if (!$conn->query($sql)) {
            die("Insert failed: " . $conn->error);
        }
    }

    header("Location: index.php");
    exit();
}

if (isset($_POST['login'])) {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $result = $conn->query("SELECT * FROM users WHERE email = '$email'");
    if ($result->num_rows > 0) {
        $users = $result->fetch_assoc();
        if (password_verify($password, $users['password'])) {
            $_SESSION['name'] = $users['name'];
            $_SESSION['email'] = $users['email'];

            if ($users['role'] === 'dosen') {
                header("Location: dosen_page.php");
            } else {
                header("Location: mahasiswa_page.php");
            }
            exit();
        }
    }

    $_SESSION['login_error'] = 'Incorrect email or password';
    $_SESSION['active_form'] = 'login';
    header("Location: index.php");
    exit();
}

?>
