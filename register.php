<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Подключение к базе данных
    include 'config.php';

    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Проверяем, существует ли пользователь с таким логином
    $check_query = "SELECT * FROM users WHERE username='$username'";
    $check_result = mysqli_query($conn, $check_query);
    if (mysqli_num_rows($check_result) > 0) {
        // Перенаправление на index.php с якорем #login_error_modal
        header("Location: index.php?login_error=1#login_error_modal");
        exit();
    } else {
        // Вставляем нового пользователя
        $insert_query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if (mysqli_query($conn, $insert_query)) {
            $_SESSION['username'] = $username;
            // Перенаправление на index.php
            header("Location: index.php");
            exit(); // Важно завершить выполнение скрипта после перенаправления
        } else {
            echo "Ошибка при регистрации.";
        }
    }
    mysqli_close($conn);
}
?>
