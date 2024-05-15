<?php
session_start();
include 'config.php';

// Проверяем, была ли отправлена форма оформления заказа
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'checkout') {
    // Проверяем, есть ли что-то в корзине
    if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
        echo "Ваша корзина пуста.";
        exit;
    }

    // Получаем идентификаторы товаров из корзины
    $productIds = implode(',', $_SESSION['cart']);

    // Очищаем корзину
    unset($_SESSION['cart']);

    // Записываем заказ в базу данных
    $sql = "INSERT INTO orders (product_ids) VALUES ('$productIds')";
    if (mysqli_query($conn, $sql)) {
        echo "Заказ успешно оформлен!";
    } else {
        echo "Ошибка при оформлении заказа: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
