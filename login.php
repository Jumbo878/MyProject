<?php
session_start();
// Подключение к базе данных
include 'config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;

            // Проверяем, если имя пользователя 'Admin', устанавливаем флаг is_admin в true
            if ($username === 'Admin') {
                $_SESSION['is_admin'] = true;
            }

            // Перенаправление на index.php
            header("Location: index.php");
            exit(); 
        } else {
            // Перенаправление на страницу с сообщением об ошибке
            header("Location: index.php?login_error=1");
            exit();
        }
    } else {
        // Перенаправление на страницу с сообщением об ошибке
        header("Location: index.php?login_error=1");
        exit();
    }
    mysqli_close($conn);
}
?>
